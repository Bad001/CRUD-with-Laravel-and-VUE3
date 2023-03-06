<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Validation\ValidationException;

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
        $request->validate([
            'email' => ['required', 'email:rfc,dns', 'unique:customers', 'max:40'],
            'phone_number' => ['required', 'unique:customers', 'max:10'],
            'name' => ['required', 'max:40'],
            'surname' => ['required', 'max:40'],
        ]);
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
        $customers = Customer::findOrFail($id);
        return view('customers.show')->with('customers', $customers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customers = Customer::findOrFail($id);
        return view('customers.edit')->with('customers', $customers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => ['required', 'email:rfc,dns', 'unique:customers', 'max:40'],
            'phone_number' => ['required', 'integer', 'unique:customers', 'max_digits:10'],
            'name' => ['required', 'max:40'],
            'surname' => ['required', 'max:40'],
        ]);
        $customers = Customer::findOrFail($id);
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
        Customer::destroy($id);
        return redirect('customers');
    }
}
