@extends('layouts.menu')
@section('title', 'Customer ' . $customers->id)
@section('table')
    <table>
        <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Phone Number</td>
            <td>Email</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $customers->id }}</td>
                <td>{{ $customers->name }}</td>
                <td>{{ $customers->surname }}</td>
                <td>{{ $customers->phone_number }}</td>
                <td>{{ $customers->email }}</td>
                <td>
                    <a href="{{ url('customers') }}">Back</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
