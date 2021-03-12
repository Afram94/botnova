<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'project_create',
            ],
            [
                'id'    => 18,
                'title' => 'project_edit',
            ],
            [
                'id'    => 19,
                'title' => 'project_show',
            ],
            [
                'id'    => 20,
                'title' => 'project_delete',
            ],
            [
                'id'    => 21,
                'title' => 'project_access',
            ],
            [
                'id'    => 22,
                'title' => 'folder_create',
            ],
            [
                'id'    => 23,
                'title' => 'folder_edit',
            ],
            [
                'id'    => 24,
                'title' => 'folder_show',
            ],
            [
                'id'    => 25,
                'title' => 'folder_delete',
            ],
            [
                'id'    => 26,
                'title' => 'folder_access',
            ],
            [
                'id'    => 27,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 28,
                'title' => 'customer_create',
            ],
            [
                'id'    => 29,
                'title' => 'customer_edit',
            ],
            [
                'id'    => 30,
                'title' => 'customer_show',
            ],
            [
                'id'    => 31,
                'title' => 'customer_delete',
            ],
            [
                'id'    => 32,
                'title' => 'customer_access',
            ],
            [
                'id'    => 33,
                'title' => 'notice_create',
            ],
            [
                'id'    => 34,
                'title' => 'notice_edit',
            ],
            [
                'id'    => 35,
                'title' => 'notice_show',
            ],
            [
                'id'    => 36,
                'title' => 'notice_delete',
            ],
            [
                'id'    => 37,
                'title' => 'notice_access',
            ],
            [
                'id'    => 38,
                'title' => 'product_create',
            ],
            [
                'id'    => 39,
                'title' => 'product_edit',
            ],
            [
                'id'    => 40,
                'title' => 'product_show',
            ],
            [
                'id'    => 41,
                'title' => 'product_delete',
            ],
            [
                'id'    => 42,
                'title' => 'product_access',
            ],
            [
                'id'    => 43,
                'title' => 'productinfo_create',
            ],
            [
                'id'    => 44,
                'title' => 'productinfo_edit',
            ],
            [
                'id'    => 45,
                'title' => 'productinfo_show',
            ],
            [
                'id'    => 46,
                'title' => 'productinfo_delete',
            ],
            [
                'id'    => 47,
                'title' => 'productinfo_access',
            ],
            [
                'id'    => 48,
                'title' => 'stock_create',
            ],
            [
                'id'    => 49,
                'title' => 'stock_edit',
            ],
            [
                'id'    => 50,
                'title' => 'stock_show',
            ],
            [
                'id'    => 51,
                'title' => 'stock_delete',
            ],
            [
                'id'    => 52,
                'title' => 'stock_access',
            ],
            [
                'id'    => 53,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 54,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 55,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 56,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 57,
                'title' => 'transaction_access',
            ],
            
        ];

        Permission::insert($permissions);
    }
}
