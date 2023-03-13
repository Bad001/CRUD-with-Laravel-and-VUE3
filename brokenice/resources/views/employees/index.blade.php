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
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Salary Level</th>
        <th>Action</th>
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
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Salary Level</th>
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
<h4>Amount of orders for Salary level</h4>
<table>
    <thead>
    <tr>
        <th>Total orders</th>
        <th>Salary level</th>
    </tr>
    </thead>
    <tbody>
    @foreach($salaryLevelFollowsOrders as $salaryLevelFollowsOrder => $value)
        <tr>
            <td>{{ $value->total_orders }}</td>
            <td>{{ $value->salary_level }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<h4>Employees with total amount of orders handled</h4>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Total amount</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Salary Level</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employeesTotalAmountOrdersFollowed as $employeeTotalAmountOrdersFollowed => $value)
        <tr>
            <td>{{ $value->id }}</td>
            @if($value->total_amount_handled === NULL)
                <td>0 €</td>
            @else
                <td>{{ $value->total_amount_handled }} €</td>
            @endif
            <td>{{ $value->name }}</td>
            <td>{{ $value->surname }}</td>
            <td>{{ $value->phone_number }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->salary_level }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<h4>Amount of orders for Salary level</h4>
<table>
    <thead>
    <tr>
        <th>Total Amount Of Orders</th>
        <th>Salary level</th>
    </tr>
    </thead>
    <tbody>
    @foreach($salaryLevelTotalAmountSpentForOrdersFollowed as $salaryLevelTotalAmountSpentForOrderFollowed => $value)
        <tr>
            @if($value->total_amount_handled === NULL)
                <td>0 €</td>
            @else
                <td>{{ $value->total_amount_handled }} €</td>
            @endif
            <td>{{ $value->salary_level }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<h4>Employees list and total orders handled</h4>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Orders Handled</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Salary Level</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employeesTotalOrdersFollowed as $employeeTotalOrdersFollowed => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->total_orders }}</td>
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
