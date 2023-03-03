<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customers</title>
    <link rel="stylesheet" href="{{ asset('/css/layout.css') }}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Customers
        </div>

        <div class="links">
            <a href="{{ url('customer/create') }}">Create</a>
            <a href="{{ url('customer/update') }}">Update</a>
            <a href="{{ url('customer/destroy') }}">Destroy</a>
            <a href="{{ url('customer/show') }}">Show</a>
            <a href="/">Return Home</a>
        </div>
    </div>
</div>
</body>
</html>
