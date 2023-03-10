<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;

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

Route::get('/vue3/employees', function () {
    return view('vue3.employees.index');
});

Route::get('/vue3/customers', function () {
    return view('vue3.customers.index');
});

Route::get('/vue3/orders', function () {
    return view('vue3.orders.index');
});

Route::resource('employees', EmployeeController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
