@extends('layouts.menu')
@section('title', 'Brokenice')
@section('links')
    <a href="{{ url('employees') }}">Employees</a>
    <a href="{{ url('customers') }}">Customers</a>
    <a href="{{ url('orders') }}">Orders</a>
@endsection
