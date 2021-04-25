@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        Show Transactions
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.productinfos.index') }}">
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
                            {{ $productinfo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Beskrivning
                        </th>
                        <td>
                            {{ $productinfo->description ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Serienumber
                        </th>
                        <td>
                            {{ $productinfo->serial_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Kund
                        </th>
                        <td>
                            @foreach($productinfo->customers as $key => $item)
                            <span class="label label-info">{{ $item->name }}
                                <hr>
                            </span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Artiekel
                        </th>
                        <td>
                            @foreach($productinfo->products as $key => $item)
                            <span class="label label-info">{{ $item->name }}
                                <hr>
                            </span>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.productinfos.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>

@endsection