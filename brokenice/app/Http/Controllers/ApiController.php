<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Index
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
    // Create
    public function storeCustomer(Request $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->save();
    }
    public function storeEmployee(Request $request)
    {

    }
    public function storeOrder(Request $request)
    {

    }
    // Read
    public function showCustomer(string $id)
    {

    }
    public function showEmployee(string $id)
    {

    }
    public function showOrder(string $id)
    {

    }
    // Update
    public function updateCustomer(Request $request, string $id)
    {

    }
    public function updateEmployee(Request $request, string $id)
    {

    }
    public function updateOrder(Request $request, string $id)
    {

    }
    // Delete
    public function deleteCustomer(string $id)
    {

    }
    public function deleteEmployee(string $id)
    {

    }
    public function deleteOrder(string $id)
    {

    }
}
