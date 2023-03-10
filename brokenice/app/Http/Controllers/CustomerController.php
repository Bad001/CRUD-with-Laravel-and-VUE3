<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        $customersTotalAmountSpent = Customer::withSum('orders as total_amount_spent', 'price')
            ->orderBy('total_amount_spent', 'desc')
            ->groupBy('id')
            ->get();
        return view ('customers.index')->with('customers', $customers)
            ->with('customersTotalAmountSpent', $customersTotalAmountSpent);
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
            'phone_number' => ['required', 'integer', 'unique:customers', 'max_digits:10'],
            'name' => ['required', 'max:40'],
            'surname' => ['required', 'max:40'],
        ]);
        $customer = new Customer;
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->save();
        return redirect('customers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit')->with('customer', $customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => ['required', 'email:rfc,dns', 'max:40', Rule::unique('customers')->ignore($id)],
            'phone_number' => ['required', 'integer', 'max_digits:10', Rule::unique('customers')->ignore($id)],
            'name' => ['required', 'max:40'],
            'surname' => ['required', 'max:40'],
        ]);
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->surname = $request->surname;
        $customer->email = $request->email;
        $customer->phone_number = $request->phone_number;
        $customer->save();
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
