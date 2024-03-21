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