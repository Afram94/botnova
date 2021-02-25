@extends('layouts.admin')
<!-- This is an example component -->

<!--  <main class="flex justify-center items-center">
    <h1 class="text-3xl text-center">Welcome</h1>
  </main> -->
@section('content')


<div name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</div>

<!-- <div class="main-card">
    <div class="body">
        @if(session('status'))
        <div class="alert success">
            {{ session('status') }}
        </div>
        @endif

        You are logged in!
    </div>
</div> -->


<a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 hover:bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple mt-5"
    href="/admin/customers">
    <div class="flex items-center">
        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
        </svg>
        <span> alla kunder</span>
    </div>
    <span>Visa &RightArrow;</span>
</a>

<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4 mt-10">
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                </path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Total Customers
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{App\Customer::all()->count()}}
            </p>

        </div>
    </div>
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Total Tasks
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                {{App\Project::all()->count()}}
            </p>
        </div>
    </div>
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Notices
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
            {{App\Notice::all()->count()}}
            </p>
        </div>
    </div>
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                </path>
            </svg>
        </div>
        <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                New sales
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                376
            </p>
        </div>
    </div>
</div>






<div class="container w-full mx-auto pt-20">

<div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

    <!--Console Content-->

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-green-600"><i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">Total Revenue</h5>
                        <h3 class="font-bold text-3xl">$3249 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">Total Users</h5>
                        <h3 class="font-bold text-3xl">249 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">New Users</h5>
                        <h3 class="font-bold text-3xl">2 <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-blue-600"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">Server Uptime</h5>
                        <h3 class="font-bold text-3xl">152 days</h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">To Do List</h5>
                        <h3 class="font-bold text-3xl">7 tasks</h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-3">
            <!--Metric Card-->
            <div class="bg-white border rounded shadow p-2">
                <div class="flex flex-row items-center">
                    <div class="flex-shrink pr-4">
                        <div class="rounded p-3 bg-red-600"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                    </div>
                    <div class="flex-1 text-right md:text-center">
                        <h5 class="font-bold uppercase text-gray-500">Issues</h5>
                        <h3 class="font-bold text-3xl">3 <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                    </div>
                </div>
            </div>
            <!--/Metric Card-->
        </div>
    </div>

   

<footer class="bg-white border-t border-gray-400 shadow">
<div class="container max-w-md mx-auto flex py-8">

    <div class="w-full mx-auto flex flex-wrap">
        <div class="flex w-full md:w-1/2 ">
            <div class="px-8">
                <h3 class="font-bold font-bold text-gray-900">About</h3>
                <p class="py-4 text-gray-600 text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel mi ut felis tempus commodo nec id erat. Suspendisse consectetur dapibus velit ut lacinia.
                </p>
            </div>
        </div>

        <div class="flex w-full md:w-1/2">
            <div class="px-8">
                <h3 class="font-bold font-bold text-gray-900">Social</h3>
                <ul class="list-reset items-center text-sm pt-3">
                    <li>
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
                    </li>
                    <li>
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
                    </li>
                    <li>
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-1" href="#">Add social link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>



</div>
</footer>




@endsection
@section('scripts')
@parent

@endsection