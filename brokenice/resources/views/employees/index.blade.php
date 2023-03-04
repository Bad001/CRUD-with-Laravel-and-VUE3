@extends('layouts.menu')
@section('title', 'Employees')
@section('links')
    <a href="{{ url('employees/create') }}">Create</a>
    <a href="{{ url('employees/update') }}">Update</a>
    <a href="{{ url('employees/destroy') }}">Destroy</a>
    <a href="{{ url('employees/show') }}">Show</a>
    <a href="/">Return Home</a>
@endsection
