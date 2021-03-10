<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Slime | {{ $title ?? 'Paginer'}}</title>
    <link rel="stylesheet" href="{{asset('dashboard/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.12.0/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}"/>
    @yield('stylesheet')
</head>

<body id="page-top">
    <div id="wrapper">
        @include('dashboard.layouts.partials._dash')
        <div class="d-flex flex-column" id="content-wrapper">

            <div id="content">
                @include('dashboard.layouts.partials._nav')
                <div class="body">
                    @yield('body')
                </div>
            </div>

            @include('dashboard.layouts.partials._footer')
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
    @yield('script.footer')
</body>

</html>
