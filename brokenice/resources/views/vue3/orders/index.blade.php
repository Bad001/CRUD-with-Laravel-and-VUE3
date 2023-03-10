<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <index-order-component></index-order-component>
    <a href="{{ url('/vue3/index') }}">Back to index</a>
    <a href="{{ url('/vue3/orders/create') }}">| Create a order</a>
</div>
</body>
</html>
