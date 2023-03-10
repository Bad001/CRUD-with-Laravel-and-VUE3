<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;

class ApiController extends Controller
{
    public function getOrders()
    {
        $orders = Order::all();
        return response()->json($orders);
    }
    public function getEmployees()
    {
        $employees = Employee::all();
        return response()->json($employees);
    }
    public function getCustomers()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }
}
