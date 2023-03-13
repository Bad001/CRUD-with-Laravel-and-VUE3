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

Route::resource('employees', EmployeeController::class);
Route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);

// Indexes
Route::get('/vue3', function () {
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

// Create views
Route::get('/vue3/employees/create', function () {
    return view('vue3.employees.create');
});
Route::get('/vue3/customers/create', function () {
    return view('vue3.customers.create');
});
Route::get('/vue3/orders/create', function () {
    return view('vue3.orders.create');
});

// Edit views
Route::get('/vue3/employees/{employee}/edit', function () {
    return view('vue3.employees.edit');
});
Route::get('/vue3/customers/{customer}/edit', function () {
    return view('vue3.customers.edit');
});
Route::get('/vue3/orders/{order}/edit', function () {
    return view('vue3.orders.edit');
});

// Show views
Route::get('/vue3/employees/{employee}', function () {
    return view('vue3.employees.show');
});
Route::get('/vue3/customers/{customer}', function () {
    return view('vue3.customers.show');
});
Route::get('/vue3/orders/{customer}', function () {
    return view('vue3.orders.show');
});
