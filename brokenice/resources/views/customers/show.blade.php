@extends('layouts.menu')
@section('title', 'Customer ' . $customer->id)
@section('table')
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->surname }}</td>
                <td>{{ $customer->phone_number }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <a href="{{ url('customers') }}">Back</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
