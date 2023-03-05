@extends('layouts.form')
@section('action', 'Edit a order')
@section('form')
    <form action="{{ url('orders/') }}" method="put">
        <label for="price">Price</label><br>
        <input type="number" placeholder="EUR currency" min="0" step="any" id="price" required><br>
        <label for="date">Acquisition date</label><br>
        <input type="date" id="date" required><br>
        <label for="customer_id">Customer id</label><br>
        <input type="number" id="customer_id" required><br>
        <label for="employee_id">Employee id</label><br>
        <input type="number" id="employee_id" required><br>
        <label for="description">Description</label><br>
        <textarea id="description"></textarea><br>
        <input type="submit" value="Submit">
    </form>
@endsection
@section('links')
    <a href="{{ url('orders') }}">Back</a>
@endsection
