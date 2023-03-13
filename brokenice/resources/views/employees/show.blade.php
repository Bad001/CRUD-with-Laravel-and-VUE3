@extends('layouts.menu')
@section('title', 'Employee ' . $employee->id)
@section('table')
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Salary Level</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->surname }}</td>
                <td>{{ $employee->phone_number }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->salary_level }}</td>
                <td>
                    <a href="{{ url('employees') }}">Back</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
