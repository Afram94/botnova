@extends('layouts.admin')
@section('content')
@can('customer_create')
<div class="block my-4">
    <a class="btn-md btn-green" href="{{ route('admin.customers.create') }}">
        Skapa kund
    </a>
    <!-- <p class="text-center">Den här sidan visa alla kunder och man kan också skapa en kund genom attt klicka på <span class="bg-blue-400">Add Kund</span></p> -->
</div>
@endcan
<div class="main-card">
    <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl text-center">Kunder <span
            class="text-indigo-600">Tabell</span></h2>


    <div class="max-w-screen max-h-screen bg-gray-100 items-center justify-center">
        <div class="w-full px-6">
            <div class="my-6">
                <table class="stripe hover bordered datatable datatable-customer">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th width="10">

                            </th>
                            <th class="py-3 px-6 text-left">
                                ID
                            </th>
                            <th class="py-3 px-6 text-center">
                                Namn
                            </th>
                            <th class="py-3 px-6 text-center">
                                Företag
                            </th>

                            <th class="py-3 px-6 text-center">
                                Org_nummer
                            </th>
                            <th class="py-3 px-6 text-center">
                                Personnummer
                            </th>
                            <th class="py-3 px-6 text-center">
                                Post_nummer
                            </th>
                            <th class="py-3 px-6 text-center">
                                Ort
                            </th>
                            <th class="py-3 px-6 text-center">
                                Beskrivning
                            </th>
                            <th class="py-3 px-6 text-center">
                                Användare
                            </th>
                            
                            <th class="py-3 px-6 text-center">
                                &nbsp;
                            </th>

                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($customers as $key => $customer)
                        <tr class="border-b border-gray-200 hover:bg-gray-100" data-entry-id="{{ $customer->id }}">
                            <td class="px-4">

                            </td>
                            <td
                                class="py-3 px-6 text-left whitespace-nowrap border-b-2 border-r-2 border-l-2 border-gray-300">
                                <div class="flex items-center">
                                    <div class="mr-2">
                                    </div>
                                    <span class="font-medium">{{ $customer->id ?? '' }}</span>
                                </div>
                            </td>

                            <td class=" border-b-2 border-r-2 border-gray-300 py-3 px-6 text-left leading-4">
                                <span
                                    class="flex text-black py-1 px-3 rounded-full font-semibold">{{ $customer->name ?? '' }}</span>
                            </td>

                            <td class=" border-b-2 border-r-2 border-gray-300 py-3 px-6 text-left leading-4">
                                <span
                                    class="flex text-black py-1 px-3 rounded-full font-semibold">{{ $customer->company ?? '' }}</span>
                            </td>

                            <td class=" border-b-2 border-r-2 border-gray-300 py- px-6 text-left leading-4">
                                <span
                                    class="flex text-black py-1 px-3 rounded-full font-semibold">{{ $customer->org_number ?? '' }}</span>
                                    
                            </td>

                            <td class="border-b-2 border-r-2 border-gray-300 py-3 px-6 text-left leading-4">
                                <span
                                    class="flex text-black py-1 px-3 rounded-full font-semibold">{{ $customer->SSN ?? '' }}</span>
                            </td>

                            <td class="border-b-2 border-r-2 border-gray-300 py-3 px-6 text-left leading-4">
                                <span
                                    class="flex text-black py-1 px-3 rounded-full font-semibold">{{ $customer->ZIP_Code ?? '' }}</span>
                            </td>

                            <td class="border-b-2 border-r-2 border-gray-300 py-3 px-6 text-left leading-4">
                                <span
                                    class="flex text-black py-1 px-3 rounded-full font-semibold">{{ $customer->residence ?? '' }}</span>
                            </td>

                            <td class="border-b-2 border-r-2 border-gray-300 py-3 px-6 text-left leading-4">
                                <span
                                    class="flex text-black py-1 px-3 rounded-full font-semibold">{{ $customer->description ?? '' }}</span>
                            </td>


                            <td class="border-b-2 border-r-2 border-gray-300 py-3 px-6 text-center leading-4">
                                @foreach($customer->users as $key => $item)
                                <span
                                    class="bg-blue-400 text-white py-1 px-12 rounded-full font-semibold text-center">{{ $item->name }}</span>
                                @endforeach
                            </td>

                            

                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">


                                    @can('customer_show')
                                    <div class="w-4 mr-2 transform text-gray-600 hover:text-purple-500 hover:scale-110">
                                        <a href="{{ route('admin.customers.show', $customer->id) }}"
                                            style="color: inherit;">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                    </div>
                                    @endcan

                                    @can('customer_edit')
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <a href="{{ route('admin.customers.edit', $customer->id) }}"
                                            style="color: inherit;">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                    </div>
                                    @endcan

                                    @can('customer_delete')
                                    <form action="{{ route('admin.customers.destroy', $customer->id) }}" method="POST"
                                        onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class=" " value="Ta bort">
                                    </form>
                                    @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
@can('customer_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.customers.massDestroy') }}",
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
  let table = $('.datatable-customer:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection


