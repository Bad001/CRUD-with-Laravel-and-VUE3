@extends('layouts.menu')
@section('title', 'Customer ' . $customer->id)
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
