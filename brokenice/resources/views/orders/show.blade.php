@extends('layouts.menu')
@section('title', 'Order ' . $orders->id)
@section('table')
    <table>
        <thead>
        <tr>
            <td>ID</td>
            <td>Price</td>
            <td>Acquisition_Date</td>
            <td>Customer_ID</td>
            <td>Employee_ID</td>
            <td>Description</td>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $orders->id }}</td>
                <td>{{ $orders->price }}</td>
                <td>{{ $orders->acquisition_date }}</td>
                <td>{{ $orders->customer_id }}</td>
                <td>{{ $orders->employee_id }}</td>
                <td>{{ $orders->description }}</td>
                <td>
                    <a href="{{ url('orders') }}">Back</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
