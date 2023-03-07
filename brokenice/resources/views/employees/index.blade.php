@extends('layouts.menu')
@section('title', 'Employees')
@section('links')
    <a href="{{ url('employees/create') }}">Create</a>
    <a href="{{ url('/') }}">Return Home</a>
@endsection
@section('table')
<table>
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
    @foreach($employees as $employee => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->surname }}</td>
            <td>{{ $value->phone_number }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->salary_level }}</td>
            <td>
                <a href="{{ url('employees/' . $value->id) }}">Show</a>
                <a href="{{ url('employees/' . $value->id . '/edit') }}">Edit</a>
                <form method="POST" action="{{ url('employees/' . $value->id) }}" style="display:inline">
                    {{ method_field('DELETE') }}
                    {!! csrf_field() !!}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<h4>Employees that follows the customer with ID 6</h4>
<table>
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
    @foreach($employeesThatFollowsCustomer as $employeeThatFollowCustomer => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->surname }}</td>
            <td>{{ $value->phone_number }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->salary_level }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
