@extends('layouts.form')
@section('action', 'Create a customer')
@section('form')
<form action="/todo">
    <label for="email">Email</label><br>
    <input type="email" id="email" required><br>
    <label for="name">First name</label><br>
    <input type="text" id="name" required><br>
    <label for="surname">Last name</label><br>
    <input type="text" id="surname" required><br>
    <label for="phone">Phone number</label><br>
    <input type="tel" maxlength="10" id="phone" required><br>
    <input type="submit" value="Submit">
</form>
@endsection
@section('links')
    <a href="{{ url('customers') }}">Back</a>
@endsection
