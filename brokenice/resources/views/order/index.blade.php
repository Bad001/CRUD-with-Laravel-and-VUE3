<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order</title>
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Orders
        </div>

        <div class="links">
            <a href="{{ url('order/create') }}">Create</a>
            <a href="{{ url('order/update') }}">Update</a>
            <a href="{{ url('order/destroy') }}">Destroy</a>
            <a href="{{ url('order/show') }}">Show</a>
            <a href="/">Return Home</a>
        </div>
    </div>
</div>
</body>
</html>
