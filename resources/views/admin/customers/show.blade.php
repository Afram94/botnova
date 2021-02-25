@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        <!-- {{ trans('global.show') }} {{ trans('cruds.customer.title') }} --> Show the Customer info
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.customers.index') }}">
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
                        {{ $customer->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                         Name
                    </th>
                    <td>
                        {{ $customer->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Company
                    </th>
                    <td>
                        {{ $customer->company }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Org_number
                    </th>
                    <td>
                        {{ $customer->org_number }}
                    </td>
                </tr>
                <tr>
                    <th>
                       SSN
                    </th>
                    <td>
                        {{ $customer->SSN }}
                    </td>
                </tr>
                <tr>
                    <th>
                        ZIP_Code
                    </th>
                    <td>
                        {{ $customer->ZIP_Code }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Residence
                    </th>
                    <td>
                        {{ $customer->residence }}
                    </td>
                </tr>
                <tr>
                    <th>
                          Description
                    </th>
                    <td>
                        {{ $customer->description }}
                    </td>
                </tr>
                <tr>
                    <th>
                        User
                    </th>
                    <td>
                        @foreach($customer->users as $key => $users)
                            <span class="label label-info">{{ $users->name }}</span>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.customers.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection