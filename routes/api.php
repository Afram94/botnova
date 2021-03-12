<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Projects
    Route::apiResource('projects', 'ProjectsApiController');

    // Customers
    Route::apiResource('customers', 'CustomersApiController');

    // Notices
    Route::apiResource('notices', 'NoticesApiController');

    // Products
    Route::apiResource('products', 'ProductsApiController');

    // Productinfos
    Route::apiResource('productinfos', 'ProductinfosApiController');

    // Stocks
    Route::apiResource('stocks', 'StocksApiController');

    // Transactions
    Route::apiResource('transactions', 'TransactionsApiController');

    // Folders
    Route::post('folders/media', 'FoldersApiController@storeMedia')->name('folders.storeMedia');
    Route::apiResource('folders', 'FoldersApiController');
});
