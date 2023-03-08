@extends('layouts.menu')
@section('title', 'Orders')
@section('links')
    <a href="{{ url('orders/create') }}">Create</a>
    <a href="{{ url('/') }}">Return Home</a>
@endsection
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
    @foreach($orders as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->acquisition_date }}</td>
            <td>{{ $value->customer_id }}</td>
            <td>{{ $value->employee_id }}</td>
            <td>{{ $value->description }}</td>
            <td>
                <a href="{{ url('orders/' . $value->id) }}">Show</a>
                <a href="{{ url('orders/' . $value->id . '/edit') }}">Edit</a>
                <form method="POST" action="{{ url('orders/' . $value->id) }}" style="display:inline">
                    {{ method_field('DELETE') }}
                    {!! csrf_field() !!}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<h4>Orders followed by employee with ID 26</h4>
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Price</td>
        <td>Acquisition_Date</td>
        <td>Customer_ID</td>
        <td>Description</td>
    </tr>
    </thead>
    <tbody>
    @foreach($ordersFollowedByEmployee as $orderFollowedByEmployee => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->acquisition_date }}</td>
            <td>{{ $value->customer_id }}</td>
            <td>{{ $value->description }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<h4>February orders followed by employees:</h4>
<table>
    <thead>
    <tr>
        <td>ID Order</td>
        <td>Price</td>
        <td>Acquisition_Date</td>
        <td>Customer_ID</td>
        <td>Description</td>
        <td>Employee_ID</td>
    </tr>
    </thead>
    <tbody>
    @foreach($februaryOrdersFollowedByEmployees as $februaryOrderFollowedByEmployees => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->price }}</td>
            <td>{{ $value->acquisition_date }}</td>
            <td>{{ $value->customer_id }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->employee_id }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
