@extends('layouts.admin')
@section('content')
@can('stock_create')


<div class="block my-4">
        <a class="btn-md btn-green" href="{{ route('admin.stocks.create') }}">
            Lägg till
        </a>
    </div>


    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12 mt-2">
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        Lager
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Stock">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider text-center">
                            Produkter
                        </th>
                       <!--  @admin
                            <th>
                                Hospital
                            </th>
                        @endadmin -->
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider text-center">
                            Nuvarande i lager
                        </th>
                        <!-- @user -->
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider text-center">
                                Lägg till
                            </th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider text-center">
                                Ta bort
                            </th>
                        <!-- @enduser -->
                        <th class="px-6 py-3 border-b-2 border-gray-300 text-left leading-4 text-blue-500 tracking-wider text-center">
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stocks as $key => $stock)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap text-blue-900 text-sm leading-5 text-center">
                                {{ $stock->product->name ?? '' }}
                            </td>
                            
                            <td class="px-6 py-4 whitespace-no-wrap text-blue-900 text-sm leading-5 text-center">
                                {{ $stock->current_stock ?? '' }}
                            </td>
                            <!-- @user -->
                                <td>
                                    <form action="{{ route('admin.transactions.storeStock', $stock->id) }}" method="POST" style="display: inline-block;" class="form-inline">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="action" value="add">
                                        <input type="number" name="stock" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker" min="1">
                                        <input type="submit" class='btn-md btn-green' value="ADD">
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ route('admin.transactions.storeStock', $stock->id) }}" method="POST" style="display: inline-block;" class="form-inline">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="action" value="remove">
                                        <input type="number" name="stock" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker" min="1">
                                        <input type="submit" class="btn-md btn-red" value="REMOVE">
                                    </form>
                                </td>
                            <!-- @enduser -->
                            <td>

                            @can('customer_show')
                                
                                <a  href="{{ route('admin.stocks.show', $stock->id) }}">
                               
                                   <svg class="inline-block w-4 h-4 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                   </svg>
                                </a>
                               @endcan
                                
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <div class="footer">
        <a href="{{ route('admin.customers.index') }}" class="justify-between p-2 px-6 py-1 text-sm font-semibold text-purple-100 bg-purple-600 hover:bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
            <button >Klar</button>
            </a>
        </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
      columnDefs: [{
          orderable: true,
          className: '',
          targets: 0
      }]
  });
  $('.datatable-Stock:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection