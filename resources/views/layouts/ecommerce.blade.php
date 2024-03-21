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
    <div class="container-fuild">
        <div class="row">
            <div class="col-1">
                <aside>
                    <div class="container-fuild">
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\justification.png') }}" alt=""
                                style="width:50px;height:50px;">
                        </div>
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\hairdressing.png') }}" alt=""
                                style="width:50px;height:50px">
                        </div>
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\woman.png') }}" alt=""
                                style="width:50px;height:50px">
                        </div>
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\businessman.png') }}" alt=""
                                style="width:50px;height:50px">
                        </div>
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\television.png') }}" alt=""
                                style="width:50px;height:50px">
                        </div>
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\armchair.png') }}" alt=""
                                style="width:50px;height:50px">
                        </div>
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\console.png') }}" alt=""
                                style="width:50px;height:50px">
                        </div>
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\book.png') }}" alt=""
                                style="width:50px;height:50px">
                        </div>
                        <div class="aside">
                            <img src="{{ asset('assets\clients\images\gift.png') }}" alt=""
                                style="width:50px;height:50px">
                        </div>
                    </div>
                </aside>
            </div>
            <div class="grid-navbar col-11">
                <nav>
                    <div class="row">
                        <div class="col-3">

                            <i class="fa fa-user"><b>PIXOROUS</b></i>
                        </div>
                        <div class="col-4">
                            <form class="d-inline-flex position-relative" role="search">
                                <button type="submit" class="btn position-absolute start-0 top-0 bottom-0"
                                    id="search-addon"><i class="fa fa-search" aria-hidden="true"></i></button>
                                <input type="search" class="form-control rounded-pill"
                                    placeholder="     Search Product" aria-label="Search"
                                    aria-describedby="search-addon" style="width:400px">
                            </form>
                        </div>
                        <div class="col-2 d-inline-flex">
                            <div class="">
                                <a class="navbar-brand" href="#">
                                    <img src="{{ asset('assets/clients/images/logo.jpg') }}" alt="Avatar Logo"
                                        style="width: 40px; height: 40px; border-radius: 50%;" class="rounded-pill">
                                </a>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne" style=" background-color: rgb(213, 224, 233);">
                                            <b>Diego Morata</b>
                                        </button>
                                    </h2>
                                </div>
                            </div>
                        </div>

                        <div class="col-1">
                            <a href="#" style="text-decoration: none;color:black">Chart</a>
                        </div>
                        <div class="col-1">
                            <a href="#" style="text-decoration: none;color:black">Orders</a>
                        </div>
                    </div>
                </nav>
                <div class="row">
                    <div class="col-3">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <b>Traditional Wear</b>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <b>Western Wear</b>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <b>Swim & Beachwear</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <b>Beauty & Groomng</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <b>Juwellery</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <b>Personal care Appliances</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <b>International Brands</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <b>Foot Wear</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <b>Watches</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <b>Accessories</b>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>hiiii</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="d-inline-flex" style="background-color: aquamarine;width:90%;height:50%">
                            <div style="margin-left: 50px;margin-top:100px">
                                <p>Biggest Ofer Revaled</p>
                                <b>MORE FEALS INSIDE </b>
                                <br>
                                <b>UP TO 50% OFF</b>
                                <br>
                                <br>
                                <a href="#" style="text-decoration: none">Wishlist Now</a>
                            </div>
                            <div>
                                <img src="{{ asset('assets\clients\images\sofa-removebg-preview.png') }}"
                                    alt="" style="">
                            </div>
                        </div>
                        <div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-3"
                                style="background-color: rgb(221, 115, 229);margin-right:50px;margin-left:10px;height:230px">
                                <span>Up to 30% OFF</span>
                                <br>
                                <span>For all hand purses</span>
                                <img src="{{ asset('assets\clients\images\images__4_-removebg-preview.png') }}"
                                    alt="" style="width:200px;height:150px">
                            </div>
                            <div class="col-3" style="background-color: rgba(213, 200, 192, 0.384);height:230px">
                                <b>
                                    EXPLORE
                                    THE BIGGEST
                                    DISCOUNT
                                </b>
                                TimZone
                                <br>
                                <span>Iconic</span>
                                <img src="{{ asset('assets\clients\images\images__1_-removebg-preview.png') }}"
                                    alt="" style="width:200px;height:200px">
                            </div>
                            <div class="col-3"
                                style="background-color: rgb(72, 223, 115);margin-left:50px;height:230px">
                                <b>DONT'T MISS THE YEAR END SELL</b>
                                <span>7 day left</span>
                                <img src="{{ asset('assets\clients\images\images__3_-removebg-preview.png') }}"
                                    alt="" style="width:200px;height:100px">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <span>
                                Recently Viewed
                            </span>
                        </div>
                        <div style="background-color:white">
                            <img src="{{ asset('assets\clients\images\bag-removebg-preview.png') }}" alt=""
                                style="">
                        </div>
                        <div>
                            <span>
                                <b>Suggestion for You</b>
                            </span>
                        </div>
                        <div style="width:210px;height:240px;background-color:white">
                            <img src="{{ asset('assets\clients\images\bag1-removebg-preview.png') }}" alt=""
                                style="">
                            {{-- <span>Watch more</span> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <hr>
                    <div class="d-inline-flex">
                        <span style="margin-right: 70%"><b>Deals of the Day</b> | 20:45:12 Left</span>
                        <pre></pre>
                        <a href="#" style="text-decoration:none;color:black">View All Deals</a>
                    </div>
                    <div class="col-2">
                        <div style="background-color: white">
                            <img src="{{ asset('assets\clients\images\images-removebg-preview (1).png') }}"
                                alt="" style="height:150px;weidth:150px;">
                            <br>
                            <span><b>Red leather GUCCI bag</b></span>
                            <br>
                            <span>4500 Btdt | <del>7300 Bdt</del></span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div style="background-color: white">
                            <img src="{{ asset('assets\clients\images\bag5-removebg-preview (1).png') }}"
                                alt="" style="height:150px;weidth:150px">
                            <br>
                            <span><b>LEXRX face cream</b></span>
                            <br>
                            <span>300 Btdt | <del>740 Bdt</del></span>

                        </div>
                    </div>
                    <div class="col-2">
                        <div style="background-color: white">
                            <img src="{{ asset('assets\clients\images\images__1_-removebg-preview.png') }}"
                                alt="" style="height:150px;weidth:150px">
                            <br>
                            <span><b>Fuij Flim DSLR camera</b></span>
                            <br>
                            <span>35,000 Btdt | <del>43990 Bdt</del></span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div style="background-color: white">
                            <img src="{{ asset('assets\clients\images\bag3-removebg-preview.png') }}" alt=""
                                style="height:150px;weidth:150px">
                            <br>
                            <span><b>Sky blue kids shoe</b></span>
                            <br>
                            <span>910 Btdt | <del>1390 Bdt</del></span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div style="background-color: white">
                            <img src="{{ asset('assets\clients\images\bag2-removebg-preview.png') }}" alt=""
                                style="height:150px;weidth:150px">
                            <br>
                            <span><b>Brown leather wallet</b></span>
                            <br>
                            <span>600 Btdt | <del>980 Bdt</del></span>
                        </div>
                    </div>
                    <div class="col-2">
                        <div style="background-color: white">
                            <img src="{{ asset('assets\clients\images\bag2-removebg-preview.png') }}" alt=""
                                style="height:150px;weidth:150px">
                            <br>
                            <span><b>Brown leather wallet</b></span>
                            <br>
                            <span>600 Btdt | <del>980 Bdt</del></span>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>

    </div>
</body>

</html>
