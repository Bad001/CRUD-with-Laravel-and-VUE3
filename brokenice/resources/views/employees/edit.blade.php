@extends('layouts.form')
@section('action', 'Edit an employee')
@section('form')
    <form action="{{ url('employees/' .$employees->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="{{$employees->email}}" required><br>
        <label for="name">First name</label><br>
        <input type="text" id="name" name="name" value="{{$employees->name}}" required><br>
        <label for="surname">Last name</label><br>
        <input type="text" id="surname" name="surname" value="{{$employees->surname}}" required><br>
        <label for="phone_number">Phone number</label><br>
        <input type="tel" maxlength="10" id="phone_number" name="phone_number" value="{{$employees->phone_number}}" required><br>
        <label for="salary_level">Salary level&nbsp;&nbsp;</label>
        <select name="salary_level" id="salary_level" name="salary_level">
            <option value="1" {{ $employees->salary_level == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ $employees->salary_level == 2 ? 'selected' : '' }}>2</option>
            <option value="3" {{ $employees->salary_level == 3 ? 'selected' : '' }}>3</option>
            <option value="4" {{ $employees->salary_level == 4 ? 'selected' : '' }}>4</option>
            <option value="5" {{ $employees->salary_level == 5 ? 'selected' : '' }}>5</option>
        </select><br>
        <input type="submit" value="Submit">
    </form>
@endsection
@section('links')
    <a href="{{ url('employees') }}">Back</a>
@endsection
