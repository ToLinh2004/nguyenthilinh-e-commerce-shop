<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/clients/js/bootstrap.min.js') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Finance</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <div class="alert alert-light">
                <i class="fa fa-home">Finance</i>
            </div>
            <div>
                <input class="form-control me-2" type="text" placeholder="Search"
                    style="background-color: grey; border-radius:50px">
            </div>
            <div>
                
            </div>
            <div>

                <i class="fa fa-bell-o" aria-hidden="true"></i>
            </div>
            <div>
                <i class="fa fa-commenting-o" aria-hidden="true"></i>
            </div>
            <div>
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/clients/images/logo.jpg') }}" alt="Avatar Logo" style="width:40px;"
                        class="rounded-pill">
                </a>
            </div>

        </div>
    </nav>

    <div class="d-flex">
        <div class="d-flex justify-content-start">
            <div class="d-flex flex-column bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <div class="dropdown">
                        <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="fa fa-home"></i>Dashboard<i class="fa fa-angle-down" aria-hidden="true"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Classic</a></li>
                            <li><a class="dropdown-item" href="#">Minimal</a></li>
                        </ul>
                    </div>

                    <div class="p-2 bd-highlight">
                        <div class="dropdown">
                            <button class="btn  " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-file-o" aria-hidden="true"></i>Pages<i class="fa fa-angle-down"
                                    aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Classic</a></li>
                                <li><a class="dropdown-item" href="#">Minimal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="dropdown">
                            <button class="btn " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-apple" aria-hidden="true"></i>Application<i class="fa fa-angle-down"
                                    aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Classic</a></li>
                                <li><a class="dropdown-item" href="#">Minimal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="dropdown">
                            <button class="btn " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa pinterset" aria-hidden="true"></i>UI COmponent<i class="fa fa-angle-down"
                                    aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Classic</a></li>
                                <li><a class="dropdown-item" href="#">Minimal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="dropdown">
                            <button class="btn " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-pinterset" aria-hidden="true"></i>Widgets<i class="fa fa-angle-down"
                                    aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Classic</a></li>
                                <li><a class="dropdown-item" href="#">Minimal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-minus-square-o" aria-hidden="true"></i>Forms<i
                                    class="fa fa-angle-down" aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Classic</a></li>
                                <li><a class="dropdown-item" href="#">Minimal</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-2 bd-highlight">
                        <div class="dropdown">
                            <button class="btn " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>Charts<i class="fa fa-angle-down"
                                    aria-hidden="true"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Classic</a></li>
                                <li><a class="dropdown-item" href="#">Minimal</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end" style="margin-top: 100px">
            <div>
                <div class="alert alert-primary"
                    style="width:500px;height:40%;background-color:blue;border-radius:10px;">
                    <p class="text-white">Total Income</p>
                    <h2 class="text-white"><b>$ 579,000</b></h2>
                    <p class="text-white text-small">Saved 25%</p>
                </div>
                <div class="alert alert-primary"
                    style="width:500px;height:40%;background-color:rgb(118, 40, 220);border-radius:10px;">
                    <p class="text-white">Cash on Hand</p>
                    <h2 class="text-white"><b>$ 92,000</b></h2>
                    <p class="text-white text-small">Saved 25%</p>
                </div>
                <div>
                    @include('layouts.chart')
                </div>
            </div>
            <div>
                <div class="alert alert-primary"
                    style="width:500px;height:40%;background-color:rgb(69, 168, 226);border-radius:10px;margin-left:20px;">
                    <p class="text-white">Total Expences</p>
                    <h2 class="text-white"><b>$ 79,000</b></h2>
                    <p class="text-white text-small">Saved 25%</p>
                </div>
                <div class="alert alert-primary"
                    style="width:500px;height:40%;background-color:rgb(24, 208, 144);border-radius:10px;margin-left:20px;">
                    <p class="text-white">Net Profit Margin</p>
                    <h2 class="text-white"><b>$ 179,000</b></h2>
                    <p class="text-white text-small">Saved 66%</p>

                </div>
                <div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
