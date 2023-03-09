<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <index-component></index-component>
</div>
<a href="{{ url('vue3/employees') }}">Employees</a>
<a href="{{ url('vue3/customers') }}">Customers</a>
<a href="{{ url('vue3/orders') }}">Orders</a>
<a href="{{ url('/') }}">Back to home</a>
</body>
</html>