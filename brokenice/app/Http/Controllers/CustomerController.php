<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view ('customers.index')->with('customers', $customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customers = new Customer;
        $customers->name = $request->name;
        $customers->surname = $request->surname;
        $customers->email = $request->email;
        $customers->phone_number = $request->phone_number;
        $customers->save();
        return redirect('customers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('customers.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::find($id);
        return view('customers.edit')->with('customers', $customers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customers = Customer::find($id);
        $customers->name = $request->name;
        $customers->surname = $request->surname;
        $customers->email = $request->email;
        $customers->phone_number = $request->phone_number;
        $customers->save();
        return redirect('customers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
