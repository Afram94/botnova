@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        Show
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.roles.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">
        <tbody>
                    <tr>
                        <th>
                            ID
                        </th>
                        <td>
                            {{ $stock->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Artiekel
                        </th>
                        <td>
                            {{ $stock->product->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Current Stock
                        </th>
                        <td>
                            {{ $stock->current_stock }}
                        </td>
                    </tr>
                </tbody>
        </table>
        <h4 class="text-center">
                History of {{ $stock->product->name }}
                @if(count($stock->product->transactions) == 0)
                    is empty
                @endif
            </h4>
            @if(count($stock->product->transactions) > 0)
                <table class="striped bordered show-table">
                    <thead>
                        <tr>
                            <th class="w-75">User</th>
                            <th>Amount</th>
                        </tr>
                        @foreach($stock->product->transactions as $transaction)
                            <tr>
                                <td>
                                    {{ $transaction->user->name }}
                                </td>
                                <td>{{ $transaction->stock }}</td>
                            </tr>
                        @endforeach
                    </thead>
                </table>
            @endif
    </div>
</div>







@endsection