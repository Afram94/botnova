<?php
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\TasksController;
use App\Http\Controllers\Api\V1\Admin\TasksApiController;



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

    // tasks
    Route::apiResource('tasks', 'TasksApiController');

    // Transactions
    Route::apiResource('transactions', 'TransactionsApiController');

    // Folders
    Route::post('folders/media', 'FoldersApiController@storeMedia')->name('folders.storeMedia');
    Route::apiResource('folders', 'FoldersApiController');
});

Route::get('/customer-information', [CustomersController::class, 'customerInfo']);

/* Route::apiResource('/tasks', [TasksController::class, 'store']); */

Route::middleware('auth:sanctum')->group(function () {
    
    /* Route::get('/task/{task}', [TasksController::class, 'index']); */
    /* Route::post('/customer', [CustomerController::class, 'store']);  */
    /* Route::get('/customer/{customer}',  [CustomerController::class, 'show']); */
   /*  Route::patch('/customer/{customer}', [CustomerController::class, 'update']);
    Route::delete('/customer/{customer}', [CustomerController::class, 'destroy']); */
   });