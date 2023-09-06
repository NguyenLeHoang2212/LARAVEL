<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>Colina - Hotel, Resort & Accommodation Website Template</title>

    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/bootstrap.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/animate.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/awesome.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/linear-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/hotel-icons.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/magnific-popup.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/owl.carousel.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/datepicker.css') }}"  />
    <link rel="stylesheet" media="all" href="{{ asset('assets/client/css/theme.css') }}"  />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="page-loader"></div>

    <div class="wrapper">

      @include('client.pages.header')

        @yield('content')

        <!-- ================== Footer  ================== -->

        @include('client.pages.footer')

    </div> <!--/wrapper-->

    <!--JS files-->
    <script src="{{ asset('assets/client/js/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/client/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/client/js/jquery.owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/client/js/main.js') }}"></script>
</body>

</html>
