<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <create-order-component></create-order-component>
    <a href="{{ url('/vue3/orders') }}">Back to orders</a>
</div>
</body>
</html>
