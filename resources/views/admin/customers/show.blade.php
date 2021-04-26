@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        Visa kunder
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
                        <th>ID</th>
                        <td>{{ $customer->id }}</td>
                    </tr>
                    <tr>
                        <th>
                            Namn
                        </th>
                        <td>
                            {{ $customer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Företag
                        </th>
                        <td>
                            {{ $customer->company }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Org_nummer
                        </th>
                        <td>
                            {{ $customer->org_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Personnummer
                        </th>
                        <td>
                            {{ $customer->SSN }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Post_nummer
                        </th>
                        <td>
                            {{ $customer->ZIP_Code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Ort
                        </th>
                        <td>
                            {{ $customer->residence }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Beskrivning
                        </th>
                        <td>
                            {{ $customer->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Användare
                        </th>
                        <td>
                            @foreach($customer->users as $key => $users)
                            <span class="label label-info">{{ $users->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                   <!--  <tr>
                        <th>
                            Serial number
                        </th>
                        <td>
                            @foreach($customer->productinfos as $key => $item)
                            <span class="label label-info">{{ $item->serial_number }}
                                <hr>
                            </span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Artikel
                        </th>
                        <td>
                            @foreach($customer->productinfos as $key => $item)
                            <span class="label label-info">{{$item->products['name']}}
                                <hr>
                            </span>
                            @endforeach
                        </td>
                    </tr> -->


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