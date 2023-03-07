<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'salary_level' => ['required', 'integer', 'between:1,5'],
        ]);
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->salary_level = $request->salary_level;
        $employee->save();
        return redirect('employees');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => ['required', 'email:rfc,dns', 'max:40', Rule::unique('employees')->ignore($id)],
            'phone_number' => ['required', 'integer', 'max_digits:10', Rule::unique('employees')->ignore($id)],
            'name' => ['required', 'max:40'],
            'surname' => ['required', 'max:40'],
            'salary_level' => ['required', 'integer', 'between:1,5'],
        ]);
        $employee = Employee::findOrFail($id);
        $employee->name = $request->name;
        $employee->surname = $request->surname;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->salary_level = $request->salary_level;
        $employee->save();
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
