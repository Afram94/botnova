<div id="sidebar-disable" class="sidebar-disable hidden"></div>

<div id="sidebar" class="sidebar-menu transform -translate-x-full ease-in">
    <div class="flex items-center justify-center mt-4">
        <div class="flex items-center">
            <a href="/" class="text-white text-2xl mx-2 font-semibold">Smart Service</a>
            <!-- <a href="/" class="text-3xl font-semibold text-gray-800 md:text-4xl text-center">Smart Service</a><span class="text-indigo-600">Table</span> -->
            <!-- <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl text-center">Products <span class="text-indigo-600">Table</span></h2> -->
            
        </div>
    </div>
    <nav class="mt-4">
        <a class="nav-link{{ request()->is('admin') ? ' active' : '' }}" href="{{ route("admin.home") }}">
            <i class="fas fa-fw fa-tachometer-alt">

            </i>

            <span class="mx-4">Dashboard</span>
        </a>

        @can('user_management_access')
            <div class="nav-dropdown">
                <a class="nav-link" href="#">
                    <i class="fa-fw fas fa-users">

                    </i>

                    <span class="mx-4">{{ trans('cruds.userManagement.title') }}</span>
                    <i class="fa fa-caret-down ml-auto" aria-hidden="true"></i>
                </a>
                <div class="dropdown-items mb-1 hidden">
                        @can('permission_access')
                        <a class="nav-link{{ request()->is('admin/permissions*') ? ' active' : '' }}" href="{{ route('admin.permissions.index') }}">
                            <i class="fa-fw fas fa-unlock-alt">

                            </i>

                            <span class="mx-4">{{ trans('cruds.permission.title') }}</span>
                        </a>
                    @endcan
                    @can('role_access')
                        <a class="nav-link{{ request()->is('admin/roles*') ? ' active' : '' }}" href="{{ route('admin.roles.index') }}">
                            <i class="fa-fw fas fa-briefcase">

                            </i>

                            <span class="mx-4">{{ trans('cruds.role.title') }}</span>
                        </a>
                    @endcan
                    @can('user_access')
                        <a class="nav-link{{ request()->is('admin/users*') ? ' active' : '' }}" href="{{ route('admin.users.index') }}">
                            <i class="fa-fw fas fa-user">

                            </i>

                            <span class="mx-4">{{ trans('cruds.user.title') }}</span>
                        </a>
                    @endcan
                </div>
            </div>
        @endcan
        @can('project_access')
            <a class="nav-link{{ request()->is('admin/projects*') ? ' active' : '' }}" href="{{ route('admin.projects.index') }}">
                <i class="fa-fw fas fa-project-diagram">

                </i>

                <span class="mx-4">{{ trans('cruds.project.title') }}</span>
            </a>
        @endcan


        @can('customer_access')
            <a class="nav-link{{ request()->is('admin/customers*') ? ' active' : '' }}" href="{{ route('admin.customers.index') }}">
                <i class="fa-fw fas fa-project-diagram">

                </i>

                <span class="mx-4">Customers</span>
            </a>
        @endcan

        @can('notice_access')
            <a class="nav-link{{ request()->is('admin/notices*') ? ' active' : '' }}" href="{{ route('admin.notices.index') }}">
                <i class="fa-fw fas fa-project-diagram">

                </i>

                <span class="mx-4">Notices</span>
            </a>
        @endcan

        @can('product_access')
            <a class="nav-link{{ request()->is('admin/products*') ? ' active' : '' }}" href="{{ route('admin.products.index') }}">
                <i class="fa-fw fas fa-project-diagram">

                </i>

                <span class="mx-4">Products</span>
            </a>
        @endcan

        @can('productinfo_access')
            <a class="nav-link{{ request()->is('admin/productinfos*') ? ' active' : '' }}" href="{{ route('admin.productinfos.index') }}">
                <i class="fa-fw fas fa-project-diagram">

                </i>

                <span class="mx-4">Products Info</span>
            </a>
        @endcan
        
        @can('stock_access')
            <a class="nav-link{{ request()->is('admin/stocks*') ? ' active' : '' }}" href="{{ route('admin.stocks.index') }}">
                <i class="fa-fw fas fa-project-diagram">

                </i>

                <span class="mx-4">Stocks</span>
            </a>
        @endcan

        @can('transaction_access')
            <a class="nav-link{{ request()->is('admin/transactions*') ? ' active' : '' }}" href="{{ route('admin.transactions.index') }}">
                <i class="fa-fw fas fa-project-diagram">

                </i>

                <span class="mx-4">Transactions</span>
            </a>
        @endcan


        @can('folder_access')
            <a class="nav-link{{ request()->is('admin/folders*') ? ' active' : '' }}" href="{{ route('admin.folders.index') }}">
                <i class="fa-fw fas fa-folder">

                </i>

                <span class="mx-4">{{ trans('cruds.folder.title') }}</span>
            </a>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            <a class="nav-link{{ request()->is('profile/password') ? ' active' : '' }}" href="{{ route('profile.password.edit') }}">
                <i class="fa-fw fas fa-key">

                </i>

                <span class="mx-4">{{ trans('global.change_password') }}</span>
            </a>
        @endif
        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
            <i class="fa-fw fas fa-sign-out-alt">

            </i>

            <span class="mx-4">{{ trans('global.logout') }}</span>
        </a>
    </nav>
</div>
