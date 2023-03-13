@extends('layouts.menu')
@section('title', 'Order ' . $order->id)
@section('table')
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Price</th>
            <th>Acquisition_Date</th>
            <th>Customer_ID</th>
            <th>Employee_ID</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->acquisition_date }}</td>
                <td>{{ $order->customer_id }}</td>
                <td>{{ $order->employee_id }}</td>
                <td>{{ $order->description }}</td>
                <td>
                    <a href="{{ url('orders') }}">Back</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
