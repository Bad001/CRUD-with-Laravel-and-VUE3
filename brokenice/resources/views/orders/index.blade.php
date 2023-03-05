@extends('layouts.menu')
@section('title', 'Orders')
@section('links')
    <a href="{{ url('orders/create') }}">Create</a>
    <a href="{{ url('/') }}">Return Home</a>
@endsection
@section('table')
<table class="table table-striped table-bordered">
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
                <a class="btn btn-small btn-success" href="{{ URL::to('orders/' . $value->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('orders/' . $value->id . '/edit') }}">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
