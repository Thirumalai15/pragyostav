<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <link rel="icon" type="image/xl-icon" href="{{ asset('theme/images/prag.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('theme/vendor/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/vendor/jquery.fancybox.min.css') }}">
    <link href="{{ asset('theme/style.css') }}" rel="stylesheet">

    <style type="text/css">
        .border {
            border-top: 2px solid rgba(236, 239, 241, 0.07);
            height: 1px;
            width: 75px;
            margin: 15px auto 0;
            position: relative;
            width: 30%;
        }
        .gold_color:hover {
            color: #FFDF33;
        }

        @font-face {
            font-family: "Samarkan";
            src: url("//db.onlinewebfonts.com/t/7e96eba370659b4e4563309dc4ebb33f.eot");
            src: url("//db.onlinewebfonts.com/t/7e96eba370659b4e4563309dc4ebb33f.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/7e96eba370659b4e4563309dc4ebb33f.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/7e96eba370659b4e4563309dc4ebb33f.woff") format("woff"), url("//db.onlinewebfonts.com/t/7e96eba370659b4e4563309dc4ebb33f.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/7e96eba370659b4e4563309dc4ebb33f.svg#Samarkan") format("svg");
        }

        .row {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap;
            /* IE10 */
            flex-wrap: wrap;
            padding: 0 5px;
        }

        /* Create four equal columns that sits next to each other */
        .column {
            -ms-flex: 20%;
            /* IE10 */
            flex: 20%;
            max-width: 20%;
            align-items: center;
            padding: 0px 4px;
        }

        .column img {
            margin: 8px 8px 8px 8px;
            vertical-align: middle;
            width: 60%;
            height: 60%;
        }

        /* Responsive layout - makes a two column-layout instead of four columns */
        @media screen and (max-width: 800px) {
            .column {
                -ms-flex: 50%;
                flex: 50%;
                max-width: 50%;
            }

            .column img {
                margin: 8px 8px 8px 8px;
                vertical-align: middle;
                width: 50%;
                height: 50%;
            }
        }

        .asdf {
            color: goldenrod;
        }

        .zxcv {
            color: #FFDF33;
        }

        /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .column {
                -ms-flex: 100%;
                flex: 50%;
                max-width: 50%;
            }

            .column img {
                margin: 8px 8px 8px 8px;
                vertical-align: middle;
                width: 50%;
                height: 50%;
            }
        }

        .border:before {
            background-color: #fff;
            content: '';
            height: 6px;
            left: 50%;
            margin-left: -20px;
            position: absolute;
            top: -4px;
            width: 50px;
            background-color: #D4AF37;
        }

        html,
        body {
            max-width: 100%;
            overflow-x: hidden;

        }

        .hero {
            position: relative;
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }



        .hero::before {
            content: "";
            background-image: url('images/bg/bg00049.jpg');
            background-size: cover;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity: 0.65;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">
<div id="app">
    <main>
        @yield('content')
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="{{ asset('theme/js/scripts-dist.js')}}"></script>
<script src="{{ asset('theme/js/main.js')}}"></script>

</body>
</html>
