@extends('layouts.menu')
@section('title', 'Orders')
@section('links')
    <a href="{{ url('orders/create') }}">Create</a>
    <a href="{{ url('orders/update') }}">Update</a>
    <a href="{{ url('orders/destroy') }}">Destroy</a>
    <a href="{{ url('orders/show') }}">Show</a>
    <a href="/">Return Home</a>
@endsection
