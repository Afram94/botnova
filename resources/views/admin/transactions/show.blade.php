@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        Show Transactions
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.transactions.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">
        <tbody>
                    <tr>
                        <th>
                            transaction nummer
                        </th>
                        <td>
                            {{ $transaction->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            artikel
                        </th>
                        <td>
                            {{ $transaction->product->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Stocks
                        </th>
                        <td>
                            {{ $transaction->stock }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Användare namn
                        </th>
                        <td>
                            {{ $transaction->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.transactions.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>



@endsection