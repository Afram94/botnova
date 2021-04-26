@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        Visa produkten
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.products.index') }}">
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
                            {{ $product->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Beskrivning
                        </th>
                        <td>
                            {{ $product->name ?? '' }}
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