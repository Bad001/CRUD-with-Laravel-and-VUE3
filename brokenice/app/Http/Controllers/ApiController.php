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
        $request->validate([
            'email' => ['required', 'email:rfc,dns', 'unique:customers', 'max:40'],
            'phone_number' => ['required', 'integer', 'unique:customers', 'max_digits:10'],
            'name' => ['required', 'max:40'],
            'surname' => ['required', 'max:40'],
        ]);
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->save();
    }
    public function storeEmployee(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:rfc,dns', 'unique:employees', 'max:40'],
            'phone_number' => ['required', 'integer', 'unique:employees', 'max_digits:10'],
            'name' => ['required', 'max:40'],
            'surname' => ['required', 'max:40'],
            'salary_level' => ['required', 'integer', 'between:1,5'],
        ]);
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->salary_level = $request->salary_level;
        $employee->save();
    }
    public function storeOrder(Request $request)
    {
        $request->validate([
            'price' => ['required', 'numeric', 'min:1'],
            'acquisition_date' => ['required', 'date', 'before_or_equal:today'],
            'customer_id' => ['required', 'integer', 'exists:customers,id', 'min:1'],
            'employee_id' => ['required', 'integer', 'exists:employees,id', 'min:1'],
            'description' => ['required', 'max:255'],
        ]);
        $order = new Order();
        $order->price = $request->price;
        $order->acquisition_date = $request->acquisition_date;
        $order->customer_id = $request->customer_id;
        $order->employee_id = $request->employee_id;
        $order->description = $request->description;
        $order->save();
    }
    // Read
    public function showCustomer(string $id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json($customer);
    }
    public function showEmployee(string $id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }
    public function showOrder(string $id)
    {
        $order = Order::findOrFail($id);
        return response()->json($order);
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
