<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/styleecommerce.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/js/bootstrap.min.js') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fuild row">
        <div class="col-1">

            @include('layouts.aside')
        </div>
        <div class="grid-navbar col-11">
            @include('layouts.headerecommerce')
            <div class="row">
                @include('layouts.aside2')
                @yield('content')
            </div>
            <div class="row">
                @include('layouts.footerecommerce')
            </div>
        </div>
        <hr>
    
        </div>
    </div>
</body>
</html>