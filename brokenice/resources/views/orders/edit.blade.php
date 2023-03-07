@extends('layouts.form')
@section('action', 'Edit a order')
@section('errors')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>
        </div>
    @endif
@endsection
@section('form')
    <form action="{{ url('orders/' .$order->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        <label for="price">Price</label><br>
        <input type="number" value="{{$order->price}}" name="price" placeholder="EUR currency" min="0" step="any" id="price" required><br>
        <label for="acquisition_date">Acquisition date</label><br>
        <input type="date" value="{{$order->acquisition_date}}" id="acquisition_date" name="acquisition_date" required><br>
        <label for="customer_id">Customer id</label><br>
        <input type="number" value="{{$order->customer_id}}" id="customer_id" name="customer_id" required><br>
        <label for="employee_id">Employee id</label><br>
        <input type="number" value="{{$order->employee_id}}" id="employee_id" name="employee_id" required><br>
        <label for="description">Description</label><br>
        <textarea id="description" name="description">{{$order->description}}</textarea><br>
        <input type="submit" value="Submit">
    </form>
@endsection
@section('links')
    <a href="{{ url('orders') }}">Back</a>
@endsection
