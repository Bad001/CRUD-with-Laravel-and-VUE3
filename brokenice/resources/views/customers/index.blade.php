@extends('layouts.menu')
@section('title', 'Customers')
@section('links')
    <a href="{{ url('customers/create') }}">Create</a>
    <a href="{{ url('/') }}">Return Home</a>
@endsection
@section('table')
<table class="table table-striped table-bordered">
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
    @foreach($customers as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->surname }}</td>
            <td>{{ $value->phone_number }}</td>
            <td>{{ $value->email }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('customers/' . $value->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('customers/' . $value->id . '/edit') }}">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
