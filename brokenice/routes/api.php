<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ApiController::class)->group(function () {
    // Index
    Route::get('/vue3/employees/', 'getEmployees');
    Route::get('/vue3/customers/', 'getCustomers');
    Route::get('/vue3/orders/', 'getOrders');
    // Create
    Route::post('/vue3/orders', 'storeOrder');
    Route::post('/vue3/customers', 'storeCustomer');
    Route::post('/vue3/employees', 'storeEmployee');
    // Read
    Route::get('/vue3/orders/{order}', 'showOrder');
    Route::get('/vue3/customers/{customer}', 'showCustomer');
    Route::get('/vue3/employees/{employees}', 'showEmployee');
    // Update
    Route::patch('/vue3/orders/{order}', 'updateOrder');
    Route::patch('/vue3/customers/{customer}', 'updateCustomer');
    Route::patch('/vue3/employees/{employees}', 'updateEmployee');
    // Delete
    Route::delete('/vue3/orders/{order}', 'deleteOrder');
    Route::delete('/vue3/customers/{customer}', 'deleteCustomer');
    Route::delete('/vue3/employees/{employees}', 'deleteEmployee');
});
