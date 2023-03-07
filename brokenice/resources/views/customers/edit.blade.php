@extends('layouts.form')
@section('action', 'Edit a customer')
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
    <form action="{{ url('customers/' .$customer->id) }}" method="POST">
        {!! csrf_field() !!}
        @method("PATCH")
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="{{$customer->email}}" required><br>
        <label for="name">First name</label><br>
        <input type="text" id="name" name="name" value="{{$customer->name}}" required><br>
        <label for="surname">Last name</label><br>
        <input type="text" id="surname" name="surname" value="{{$customer->surname}}" required><br>
        <label for="phone_number">Phone number</label><br>
        <input type="tel" maxlength="10" id="phone_number" name="phone_number" value="{{$customer->phone_number}}" required><br>
        <input type="submit" value="Submit">
    </form>
@endsection
@section('links')
    <a href="{{ url('customers') }}">Back</a>
@endsection
