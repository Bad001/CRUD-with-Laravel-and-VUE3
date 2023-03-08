@extends('layouts.menu')
@section('title', 'Customers')
@section('links')
    <a href="{{ url('customers/create') }}">Create</a>
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
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->surname }}</td>
            <td>{{ $value->phone_number }}</td>
            <td>{{ $value->email }}</td>
            <td>
                <a href="{{ url('customers/' . $value->id) }}">Show</a>
                <a href="{{ url('customers/' . $value->id . '/edit') }}">Edit</a>
                <form method="POST" action="{{ url('customers/' . $value->id) }}" style="display:inline">
                    {{ method_field('DELETE') }}
                    {!! csrf_field() !!}
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<h4>Total amount spent for orders by each customer</h4>
<table>
    <thead>
    <tr>
        <td>Customer ID</td>
        <td>Amount Spent</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Phone Number</td>
        <td>Email</td>
    </tr>
    </thead>
    <tbody>
    @foreach($customersTotalAmountSpent as $customerTotalAmountSpent => $value)
        <tr>
            <td>{{ $value->id }}</td>
            @if($value->total_amount_spent === NULL)
                <td>0 €</td>
            @else
                <td>{{ $value->total_amount_spent }} €</td>
            @endif
            <td>{{ $value->name }}</td>
            <td>{{ $value->surname }}</td>
            <td>{{ $value->phone_number }}</td>
            <td>{{ $value->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
