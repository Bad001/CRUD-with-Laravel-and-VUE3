<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/vue3/index', function () {
    return view('vue3.app');
});

Route::controller(ApiController::class)->group(function () {
    Route::get('/vue3/api/employees/', 'getEmployees');
    Route::get('/vue3/api/customers/', 'getCustomers');
    Route::get('/vue3/api/orders/', 'getOrders');
});
Route::resource('employees', EmployeeController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
