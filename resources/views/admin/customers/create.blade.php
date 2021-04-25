@extends('layouts.admin')
@section('content')
<div class="main-card max-w-4xl px-10 my-4 py-6 ">
    <div class="header bg-gray-300 font-bold">
        Create Customer
    </div>

    <form method="POST" action="{{ route("admin.customers.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-rows-4 grid-flow-col gap-4 mx-6">
            <div class="mb-1">
                <label for="name" class="text-xs required font-bold ">Namn</label>

                <div class="form-group">
                    <input type="text" id="name" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        value="{{ old('name') }}" required>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>



            <div class="mb-1">
                <label for="name" class="text-xs required font-bold">Företag</label>

                <div class="form-group">
                    <input type="text" id="name" name="company" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        value="{{ old('company') }}" required>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>



            <div class="mb-1">
                <label for="name" class="text-xs required font-bold">Org_nummer</label>

                <div class="form-group">
                    <input type="text" id="name" name="org_number"
                        class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('org_number') }}"
                        required>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>



            <div class="mb-1">
                <label for="name" class="text-xs required font-bold">Personnummer</label>

                <div class="form-group">
                    <input type="text" id="name" name="SSN" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"
                        value="{{ old('SSN') }}" required>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>



            <div class="mb-1">
                <label for="name" class="text-xs required font-bold">Post_nummer</label>

                <div class="form-group">
                    <input class="color-gray-400" type="text" id="name" name="ZIP_Code"
                        class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('ZIP_Code') }}" required>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>



            <div class="mb-1">
                <label for="name" class="text-xs required font-bold">Ort</label>

                <div class="form-group">
                    <input type="text" id="name" name="residence"
                        class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('residence') }}" required>
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
                <label for="users" class="text-xs required font-bold">Användare</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all"
                        style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all"
                        style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('users') ? ' is-invalid' : '' }}" name="users[]" id="users"
                    multiple>
                    @foreach($users as $id => $users)
                    <option value="{{ $id }}" {{ in_array($id, old('users', [])) ? 'selected' : '' }}>{{ $users }}
                    </option>
                    @endforeach
                </select>
                @if($errors->has('users'))
                <p class="invalid-feedback">{{ $errors->first('users') }}</p>
                @endif
                <span class="block"></span>
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection