@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        Artiklar
    </div>

    <form method="POST" action="{{ route("admin.products.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="body">

            <div class="mb-3">
                <label for="name" class="text-xs required">Artikel Namn</label>

                <div class="form-group">
                    <input type="text" id="name" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                
            </div>

            


        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection