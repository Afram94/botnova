@extends('layouts.admin')
@section('content')
<div class="main-card max-w-4xl px-10 my-4 py-6 ">
    <div class="header bg-gray-300 font-bold">
        Create Customer
    </div>

    <form method="POST" action="{{ route("admin.productinfos.store") }}" enctype="multipart/form-data">
        @csrf

        <div class="grid grid-rows-4 grid-flow-col gap-4 mx-6">


            <div class="mb-1">
                <label for="name" class="text-xs required font-bold ">Serienummer</label>

                <div class="form-group">
                    <input type="text" id="name" name="serial_number"
                        class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('serial_number') }}"
                        required>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>


            <div class="mb-1">
                <label for="name" class="text-xs required font-bold">Beskrivning</label>

                <div class="form-group">
                    <input type="text" id="name" name="description"
                        class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('description') }}"
                        required>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>



            <div class="mb-1 ">
                <label for="products" class="text-xs required font-bold">Välj Artikel</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all"
                        style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all"
                        style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('products') ? ' is-invalid' : '' }}" name="products[]"
                    id="products" multiple>
                    @foreach($products as $id => $products)
                    <option value="{{ $id }}" {{ in_array($id, old('products', [])) ? 'selected' : '' }}>{{ $products }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('products'))
                <p class="invalid-feedback">{{ $errors->first('products') }}</p>
                @endif
                <span class="block"></span>
            </div>

            <div class="mb-1 ">
                <label for="customers" class="text-xs required font-bold">Anställda</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all"
                        style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all"
                        style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('customers') ? ' is-invalid' : '' }}" name="customers[]"
                    id="customers" multiple>
                    @foreach($customers as $id => $customers)
                    <option value="{{ $id }}" {{ in_array($id, old('customers', [])) ? 'selected' : '' }}>
                        {{ $customers }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('customers'))
                <p class="invalid-feedback">{{ $errors->first('customers') }}</p>
                @endif
                <span class="block"></span>
            </div>


            <!--  @can('product_create')
                <div class="block my-4">
                    <a class="btn-md btn-green" href="{{ route("admin.stocks.store") }}">
                        Add Product
                    </a>
                </div>
            @endcan
         -->






        </div>

        <div class="footer">
            <button type="submit" class="submit-button">Förtsätt till lager</button>
        </div>
        
        <!-- <div class="footer">
        <a href="{{ route('admin.customers.index') }}" class="flex justify-between p-2 px-6 py-1 text-sm font-semibold text-purple-100 bg-purple-600 hover:bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple">
            <button >Klar</button>
            </a>
        </div> -->
        
    </form>
</div>
@endsection