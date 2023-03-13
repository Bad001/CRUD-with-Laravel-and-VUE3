<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <index-employee-component></index-employee-component>
    <a href="{{ url('/vue3') }}">Back to index</a>
    <a href="{{ url('/vue3/employees/create') }}">| Create an employee</a>
</div>
</body>
</html>
