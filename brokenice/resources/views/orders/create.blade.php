@extends('layouts.form')
@section('action', 'Create a order')
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
    <form action="{{ url('orders') }}" method="POST">
        {!! csrf_field() !!}
        <label for="price">Price</label><br>
        <input type="number" placeholder="EUR currency" min="0" step="any" id="price" name="price" required><br>
        <label for="acquisition_date">Acquisition date</label><br>
        <input type="date" id="acquisition_date" name="acquisition_date" required><br>
        <label for="customer_id">Customer id</label><br>
        <input type="number" id="customer_id" name="customer_id" required><br>
        <label for="employee_id">Employee id</label><br>
        <input type="number" id="employee_id" name="employee_id" required><br>
        <label for="description">Description</label><br>
        <textarea id="description" name="description"></textarea><br>
        <input type="submit" value="Submit">
    </form>
@endsection
@section('links')
    <a href="{{ url('orders') }}">Back</a>
@endsection
