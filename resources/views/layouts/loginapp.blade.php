<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/animate.css">

    <!-- CSS Unify -->
    <link rel="stylesheet" href="assets/css/unify-core.css">
    <link rel="stylesheet" href="assets/css/unify-components.css">
    <link rel="stylesheet" href="assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <main>
        <!-- Login -->
        <section class="g-height-100vh d-flex align-items-center g-bg-size-cover g-bg-pos-top-center" style="background-image: url(assets/img/bg/yard.jpg);">
            <div class="container g-py-100 g-pos-rel g-z-index-1">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-lg-5">


                            @include('inc.messages')
             
                            <!-- START BODY -->
                            @yield('content')
                            <!--END BODY-->



                       
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login -->
    </main>

    <div class="u-outer-spaces-helper"></div>


    <!-- JS Global Compulsory -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


    <!-- JS Unify -->
    <script src="assets/js/hs.core.js"></script>

    <!-- JS Customization -->
    <script src="assets/js/custom.js"></script>







</body>

</html>