<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') - JobHunter</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}">
        <script src="{{ url('/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- FontAwesome -->
        <link rel="stylesheet" href="{{ url('/assets/fontawesome/css/all.min.css') }}">
    </head>
    <body class="d-flex flex-column" style="min-height: 100vh">
        <div class="flex-grow-1">
            <div class="text-bg-light p-4 mb-5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-auto mb-2 mb-lg-0">
                            <h3 class="m-0">JobHunter</h3>
                        </div>
                        <div class="col-12 col-lg-auto">
                            <h5 class="m-0 text-muted">@yield('title')</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                @yield('page')
            </div>
        </div>
        <div class="text-bg-primary text-center p-2">
            Copyright &copy; 2024, Michael R. Krisnadhi
        </div>
    </body>
</html>
