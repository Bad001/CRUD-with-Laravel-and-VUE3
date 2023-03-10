<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        $ordersFollowedByEmployee = Order::where('employee_id', '=', '26')->get();
        $februaryOrdersFollowedByEmployees = Order::whereMonth('acquisition_date', '2')->get();
        return view ('orders.index')->with('orders', $orders)
            ->with('ordersFollowedByEmployee', $ordersFollowedByEmployee)
            ->with('februaryOrdersFollowedByEmployees', $februaryOrdersFollowedByEmployees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        return redirect('orders');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show')->with('order', $order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit')->with('order', $order);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'price' => ['required', 'numeric', 'min:1'],
            'acquisition_date' => ['required', 'date', 'before_or_equal:today'],
            'customer_id' => ['required', 'integer', 'exists:customers,id', 'min:1'],
            'employee_id' => ['required', 'integer', 'exists:employees,id', 'min:1'],
            'description' => ['required', 'max:255'],
        ]);
        $order = Order::findOrFail($id);
        $order->price = $request->price;
        $order->acquisition_date = $request->acquisition_date;
        $order->customer_id = $request->customer_id;
        $order->employee_id = $request->employee_id;
        $order->description = $request->description;
        $order->save();
        return redirect('orders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Order::destroy($id);
        return redirect('orders');
    }
}
