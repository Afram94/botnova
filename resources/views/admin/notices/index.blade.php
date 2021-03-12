@extends('layouts.admin')
@section('content')
@can('notice_create')
<div class="block my-4">
    <a class="btn-md btn-green" href="{{ route('admin.notices.create') }}">
        Add Notice
    </a>
</div>
@endcan

<div class="flex flex-wrap content-start leading-6 ">
    @foreach($notices as $key => $notice)
    <div class="max-h-32 bg-white border-2 border-gray-300 p-6 rounded-md tracking-wide shadow-lg mx-2 mb-4">
        <div id="header" class="flex items-center mb-4 border-b">
            <svg class="w-10 rounded-full text-yellow-400" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
            <div id="header-text" class="leading-5 ml-6 sm">
                <h4 class="text-xl font-semibold">{{ $notice->title ?? '' }}</h4> <!-- Title -->
                <h5 class="font-semibold text-blue-600">@foreach($notice->users as $key => $item)
                    <span class="font-semibold text-blue-600">{{ $item->name }}</span>
                    @endforeach
                </h5> <!-- User -->
            </div>
        </div>
        <div id="quote">
            <p class="italic text-gray-600 border-b">{{ $notice->description ?? '' }}</p> <!-- Description -->
        </div>
        <div id="quote">
            <p class="text-gray-600 text-xs">{{ $notice->date ?? '' }}</p> <!-- Date -->
        </div>

        <td class="px-6 py-4 whitespace-no-wrap border-b text-blue-900 border-gray-500 text-sm leading-5 text-center">
            <!-- @can('notice_show')

            <a href="{{ route('admin.notices.show', $notice->id) }}">

                <svg class="inline-block w-4 h-4 text-black" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </a>
            @endcan -->



            <!-- @can('notice_edit')
            <a class="inline-block w-4 h-3 text-black" href="{{ route('admin.notices.edit', $notice->id) }}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </a>
            @endcan -->


            @can('notice_delete')

            <form action="{{ route('admin.notices.destroy', $notice->id) }}" method="POST"
                onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="submit"
                    class="inline-block px-2 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-red-300 rounded-full shadow ripple hover:shadow-lg hover:bg-red-400 focus:outline-none"
                    value="{{ trans('global.delete') }}">


            </form>
            @endcan
        </td>
    </div>
    @endforeach    
</div>
<task></task>
@endsection