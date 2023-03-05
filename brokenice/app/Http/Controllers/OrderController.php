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
        return view ('orders.index')->with('orders', $orders);
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
        $orders = new Order;
        $orders->price = $request->price;
        $orders->acquisition_date = $request->acquisition_date;
        $orders->customer_id = $request->customer_id;
        $orders->employee_id = $request->employee_id;
        $orders->description = $request->description;
        $orders->save();
        return redirect('orders');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orders = Order::find($id);
        return view('orders.edit')->with('orders', $orders);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $orders = Order::find($id);
        $orders->price = $request->price;
        $orders->acquisition_date = $request->acquisition_date;
        $orders->customer_id = $request->customer_id;
        $orders->employee_id = $request->employee_id;
        $orders->description = $request->description;
        $orders->save();
        return redirect('orders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
