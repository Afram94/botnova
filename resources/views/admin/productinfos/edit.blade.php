@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
       Redigera produkt-info
    </div>

    <form method="POST" action="{{ route("admin.productinfos.update", [$productinfo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
        <div class="body">
            <div class="mb-3">
                <label for="serial_number" class="text-xs required">Serienumber</label>

                <div class="form-group">
                    <input type="text" id="serial_number" name="serial_number" class="{{ $errors->has('serial_number') ? ' is-invalid' : '' }}" value="{{ old('serial_number', $productinfo->serial_number) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('serial_number') }}</p>
                @endif
                <!-- <span class="block">{{ trans('cruds.customer.fields.name_helper') }}</span> -->
            </div>

            <div class="mb-3">
                <label for="description" class="text-xs required">Beskrivning</label>

                <div class="form-group">
                    <input type="text" id="description" name="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description', $productinfo->description) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="customers" class="text-xs">Anställda</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('customers') ? ' is-invalid' : '' }}" name="customers[]" id="customers" multiple>
                    @foreach($customers as $id => $customers)
                        <option value="{{ $id }}" {{ (in_array($id, old('customers', [])) || $productinfo->customers->contains($id)) ? 'selected' : '' }}>{{ $customers }}</option>
                    @endforeach
                </select>
                @if($errors->has('customers'))
                    <p class="invalid-feedback">{{ $errors->first('customers') }}</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="products" class="text-xs">Anställda</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('products') ? ' is-invalid' : '' }}" name="products[]" id="products" multiple>
                    @foreach($products as $id => $products)
                        <option value="{{ $id }}" {{ (in_array($id, old('products', [])) || $productinfo->products->contains($id)) ? 'selected' : '' }}>{{ $products }}</option>
                    @endforeach
                </select>
                @if($errors->has('products'))
                    <p class="invalid-feedback">{{ $errors->first('products') }}</p>
                @endif
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection