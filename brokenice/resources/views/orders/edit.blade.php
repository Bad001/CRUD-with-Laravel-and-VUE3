@extends('layouts.form')
@section('action', 'Edit a order')
@section('form')
    <form action="{{ url('orders/' .$orders->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        <label for="price">Price</label><br>
        <input type="number" value="{{$orders->price}}" name="price" placeholder="EUR currency" min="0" step="any" id="price" required><br>
        <label for="acquisition_date">Acquisition date</label><br>
        <input type="date" value="{{$orders->acquisition_date}}" id="acquisition_date" name="acquisition_date" required><br>
        <label for="customer_id">Customer id</label><br>
        <input type="number" value="{{$orders->customer_id}}" id="customer_id" name="customer_id" required><br>
        <label for="employee_id">Employee id</label><br>
        <input type="number" value="{{$orders->employee_id}}" id="employee_id" name="employee_id" required><br>
        <label for="description">Description</label><br>
        <textarea id="description" name="description">{{$orders->description}}</textarea><br>
        <input type="submit" value="Submit">
    </form>
@endsection
@section('links')
    <a href="{{ url('orders') }}">Back</a>
@endsection
