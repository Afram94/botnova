@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Skapa stock
    </div>

    <div class="card-body max-w-sm">
        <form method="POST" action="{{ route("admin.stocks.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="relative p-4 border border-grey-lighter">
                <label class="required" for="product_id">Välj Artikel</label>
                <select class="form-control select2 {{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id"
                    id="product_id" required>
                    @foreach($products as $id => $product)
                    <option value="{{ $id }}" {{ old('product_id') == $id ? 'selected' : '' }}>{{ $product }}</option>
                    @endforeach
                </select>

                @if($errors->has('product'))
                <div class="invalid-feedback">
                    {{ $errors->first('product') }}
                </div>
                @endif
                <!-- <span class="help-block">{{ trans('cruds.stock.fields.product_helper') }}</span> -->
            </div>


           




            <div class="relative p-4 border border-grey-lighter">
                <label class="required" for="current_stock">Välj hur många</label>
                <br>
                <input
                    class="md:p-2 p-1 text-xs md:text-base border-gray-400 focus:outline-none text-center {{ $errors->has('current_stock') ? 'is-invalid' : '' }}"
                    type="number" name="current_stock" id="current_stock" value="{{ old('current_stock', '') }}"
                    step="1" required>
                @if($errors->has('current_stock'))
                <div class="invalid-feedback">
                    {{ $errors->first('current_stock') }}
                </div>
                @endif
                <span class="m-auto">
                    <!-- {{ trans('cruds.stock.fields.current_stock_helper') }} -->
                </span>
            </div>
            <div class="relative p-4 ">
                <button
                    class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 hover:bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple mt-5"
                    type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>



@endsection