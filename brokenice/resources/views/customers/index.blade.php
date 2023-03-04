@extends('layouts.menu')
@section('title', 'Customers')
@section('links')
    <a href="{{ url('customers/create') }}">Create</a>
    <a href="{{ url('customers/update') }}">Update</a>
    <a href="{{ url('customers/destroy') }}">Destroy</a>
    <a href="{{ url('customers/show') }}">Show</a>
    <a href="/">Return Home</a>
@endsection
