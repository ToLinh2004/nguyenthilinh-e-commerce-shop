
<nav class="navbar navbar-light bg-light" style="width:80%;margin-left:300px">
    <div class="container-fluid">
        <div class="search mx-5">
            <form class="d-inline-flex position-relative" role="search">
                <button type="submit" class="btn position-absolute start-0 top-0 bottom-0" id="search-addon" style="width:10px;"><i
                        class="fa fa-search" aria-hidden="true"></i></button>
                <input type="search" class="form-control rounded-pill" placeholder="" aria-label="Search"
                    aria-describedby="search-addon">
            </form>
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