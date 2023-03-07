@extends('layouts.menu')
@section('title', 'Order ' . $order->id)
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
