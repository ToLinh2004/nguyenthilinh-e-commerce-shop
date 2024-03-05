 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>
        <link rel="stylesheet" href="{{ asset('assets/clients/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <!-- CSS And JavaScript -->
    </head>
 
    <body>
        <div class="container-fuild border">
            <nav class="navbar navbar-light bg-light ">
                <!-- Navbar Contents -->
                
                <h3>Task List</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
            </nav>
        </div>
        <br>
 
        @yield('content')
    </body>
</html>