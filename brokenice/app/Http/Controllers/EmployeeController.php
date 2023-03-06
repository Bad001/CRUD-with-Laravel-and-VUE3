<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view ('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email:rfc,dns', 'unique:employees', 'max:40'],
            'phone_number' => ['required', 'integer', 'unique:employees', 'max_digits:10'],
            'name' => ['required', 'max:40'],
            'surname' => ['required', 'max:40'],
            'salary_level' => ['required', 'integer', 'min:1', 'max:5'],
        ]);
        $employees = new Employee;
        $employees->name = $request->name;
        $employees->surname = $request->surname;
        $employees->email = $request->email;
        $employees->phone_number = $request->phone_number;
        $employees->salary_level = $request->salary_level;
        $employees->save();
        return redirect('employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employees = Employee::findOrFail($id);
        return view('employees.show')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::findOrFail($id);
        return view('employees.edit')->with('employees', $employees);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employees = Employee::findOrFail($id);
        $employees->name = $request->name;
        $employees->surname = $request->surname;
        $employees->email = $request->email;
        $employees->phone_number = $request->phone_number;
        $employees->salary_level = $request->salary_level;
        $employees->save();
        return redirect('employees');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::destroy($id);
        return redirect('employees');
    }
}
