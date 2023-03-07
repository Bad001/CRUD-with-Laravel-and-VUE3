@extends('layouts.menu')
@section('title', 'Employee ' . $employee->id)
@section('table')
    <table>
        <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Phone Number</td>
            <td>Email</td>
            <td>Salary Level</td>
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
