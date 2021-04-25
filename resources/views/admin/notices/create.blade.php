@extends('layouts.admin')
@section('content')
<div class="main-card max-w-4xl px-10 my-4 py-6 ">
    <div class="header bg-gray-300 font-bold">
        Create Notice
    </div>

    <form method="POST" action="{{ route("admin.notices.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-rows-3 grid-flow-col gap-4 mx-6">
            <div class="">
                <label for="name" class="text-xs required font-bold">Titel</label>

                <div class="form-group">
                    <input type="text" id="name" name="title" class="{{ $errors->has('title') ? ' is-invalid' : '' }}"
                        value="{{ old('description') }}" required>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>


            <div class="">
                <label for="name" class="text-xs required font-bold">Beskrivning</label>

                <div class="">

                    <textarea type="text" id="name" name="description"
                        class="{{ $errors->has('description') ? ' is-invalid' : '' }}  tracking-wide px-4 leading-relaxed w-full border-2 border-gray-300 rounded focus:outline-none focus:bg-white focus:border-black"
                        value="{{ old('description') }}" required></textarea>
                </div>
                @if($errors->has('name'))
                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block"></span>
            </div>





            <div class=" ">
                <label for="users" class="text-xs required font-bold">Anställda</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all "
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