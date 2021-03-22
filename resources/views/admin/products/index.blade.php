@extends('layouts.admin')
@section('content')
@can('product_create')
    <div class="block my-4">
        <a class="btn-md btn-green" href="{{ route('admin.products.create') }}">
            Add Product
        </a>
    </div>
@endcan
<div class="main-card">
<h2 class="text-3xl font-semibold text-gray-800 md:text-4xl text-center">Products <span class="text-indigo-600">Table</span></h2>

    <div class="overflow-x-auto">
        <div class="max-w-screen max-h-screen bg-gray-100 items-center justify-center">
    <div class="w-full px-6">
        <div class="my-6">
            <table class="striped hover bordered datatable datatable-product">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th width="10" class="py-3 px-6 text-left">

                        </th>
                        <th class="py-3 px-6 text-left">
                            ID
                        </th>
                        <th class="ppy-3 px-6 text-center">
                            Name
                        </th>
                        
                        <th class="py-3 px-6 text-center">
                            &nbsp;
                        </th>
                        
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach($products as $key => $product)
                        <tr class="border-b border-gray-200 hover:bg-gray-100" data-entry-id="{{ $product->id }}">
                            <td>

                            </td>
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            
                                        </div>
                                        <span class="font-medium">{{ $product->id ?? '' }}</span>
                                    </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                    <span class="bg-blue-200 text-black py-1 px-3 rounded-full font-semibold">{{ $product->name ?? '' }}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                    @can('product_show')
                                        <div class="w-4 mr-2 transform text-gray-600 hover:text-purple-500 hover:scale-110">
                                        <a href="{{ route('admin.products.show', $product->id) }}" style="color: inherit;">
                                        
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                            </a>
                                        </div>
                                        @endcan

                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>

                                        @can('product_delete')
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class=" " value="Ta bort">
                                    </form>
                                    @endcan

                                    </div>
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>
</div>
























@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('product_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.products.massDestroy') }}",
    className: 'btn-red',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-product:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection



