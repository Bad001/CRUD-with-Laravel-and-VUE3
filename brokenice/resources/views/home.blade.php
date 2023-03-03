<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brokenice</title>
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Brokenice
        </div>

        <div class="links">
            <a href="{{ url('employee') }}">Employees</a>
            <a href="{{ url('customer') }}">Customers</a>
            <a href="{{ url('order') }}">Orders</a>
        </div>
    </div>
</div>
</body>
</html>
