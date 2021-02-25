@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.customer.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.customers.update", [$customer->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="body">
            <div class="mb-3">
                <label for="name" class="text-xs required">Name</label>

                <div class="form-group">
                    <input type="text" id="name" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', $customer->name) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customer.fields.name_helper') }}</span>
            </div>


            <div class="mb-3">
                <label for="company" class="text-xs required">Company</label>

                <div class="form-group">
                    <input type="text" id="company" name="company" class="{{ $errors->has('company') ? ' is-invalid' : '' }}" value="{{ old('company', $customer->company) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('company') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customer.fields.company_helper') }}</span>
            </div>


           

            <div class="mb-3">
                <label for="org_number" class="text-xs required">org_number</label>

                <div class="form-group">
                    <input type="text" id="org_number" name="org_number" class="{{ $errors->has('org_number') ? ' is-invalid' : '' }}" value="{{ old('org_number', $customer->org_number) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('org_number') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customer.fields.org_number_helper') }}</span>
            </div>

           

            <div class="mb-3">
                <label for="SSN" class="text-xs required">SSN</label>

                <div class="form-group">
                    <input type="text" id="SSN" name="SSN" class="{{ $errors->has('SSN') ? ' is-invalid' : '' }}" value="{{ old('SSN', $customer->SSN) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('SSN') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customer.fields.SSN_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="ZIP_Code" class="text-xs required">ZIP_Code</label>

                <div class="form-group">
                    <input type="text" id="ZIP_Code" name="ZIP_Code" class="{{ $errors->has('ZIP_Code') ? ' is-invalid' : '' }}" value="{{ old('ZIP_Code', $customer->ZIP_Code) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('ZIP_Code') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customer.fields.ZIP_Code_helper') }}</span>
            </div>


            <div class="mb-3">
                <label for="residence" class="text-xs required">residence</label>

                <div class="form-group">
                    <input type="text" id="residence" name="residence" class="{{ $errors->has('residence') ? ' is-invalid' : '' }}" value="{{ old('residence', $customer->residence) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('residence') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customer.fields.residence_helper') }}</span>
            </div>


            <div class="mb-3">
                <label for="description" class="text-xs required">description</label>

                <div class="form-group">
                    <input type="text" id="description" name="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description', $customer->description) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customer.fields.description_helper') }}</span>
            </div>
           





            <div class="mb-3">
                <label for="users" class="text-xs">{{ trans('cruds.customer.fields.users') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('users') ? ' is-invalid' : '' }}" name="users[]" id="users" multiple>
                    @foreach($users as $id => $users)
                        <option value="{{ $id }}" {{ (in_array($id, old('users', [])) || $customer->users->contains($id)) ? 'selected' : '' }}>{{ $users }}</option>
                    @endforeach
                </select>
                @if($errors->has('users'))
                    <p class="invalid-feedback">{{ $errors->first('users') }}</p>
                @endif
                <span class="block">{{ trans('cruds.customer.fields.users_helper') }}</span>
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection