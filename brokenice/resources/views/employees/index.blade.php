@extends('layouts.menu')
@section('title', 'Employees')
@section('links')
    <a href="{{ url('employees/create') }}">Create</a>
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
        <td>Salary Level</td>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->surname }}</td>
            <td>{{ $value->phone_number }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->salary_level }}</td>
            <td>
                <a class="btn btn-small btn-success" href="{{ URL::to('employees/' . $value->id) }}">Show</a>
                <a class="btn btn-small btn-info" href="{{ URL::to('employees/' . $value->id . '/edit') }}">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
