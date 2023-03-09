<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;

class ApiController extends Controller
{
    public function getOrders()
    {
        return view('vue3.orders');
    }
    public function getEmployees()
    {
        return view('vue3.employees');
    }
    public function getCustomers()
    {
        return view('vue3.customers');
    }
}
