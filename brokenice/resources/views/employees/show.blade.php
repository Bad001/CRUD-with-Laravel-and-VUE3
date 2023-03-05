@extends('layouts.menu')
@section('title', 'Employee ' . $employees->id)
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
                <td>{{ $employees->id }}</td>
                <td>{{ $employees->name }}</td>
                <td>{{ $employees->surname }}</td>
                <td>{{ $employees->phone_number }}</td>
                <td>{{ $employees->email }}</td>
                <td>{{ $employees->salary_level }}</td>
                <td>
                    <a href="{{ url('employees') }}">Back</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
