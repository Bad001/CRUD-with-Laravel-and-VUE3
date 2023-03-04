@extends('layouts.form')
@section('action', 'Create an employee')
@section('form')
    <form action="/todo">
        <label for="email">Email</label><br>
        <input type="email" id="email" required><br>
        <label for="name">First name</label><br>
        <input type="text" id="name" required><br>
        <label for="surname">Last name</label><br>
        <input type="text" id="surname" required><br>
        <label for="phone">Phone number</label><br>
        <input type="tel" id="phone" required><br>
        <label for="salary_level">Salary level&nbsp;&nbsp;</label>
        <select name="salary_level" id="salary_level">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
@endsection
@section('links')
    <a href="{{ url('employees') }}">Back</a>
@endsection
