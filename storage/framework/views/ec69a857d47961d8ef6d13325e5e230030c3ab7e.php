<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>


    <link rel="icon" type="image/xl-icon" href="<?php echo e(asset('theme/images/prag.png')); ?>">
    <link rel="manifest" href="<?php echo e(asset('site.webmanifest')); ?>">

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('theme/vendor/icomoon/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme/vendor/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme/vendor/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme/vendor/aos.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme/vendor/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme/vendor/jquery.fancybox.min.css')); ?>">
    <link href="<?php echo e(asset('theme/style.css')); ?>" rel="stylesheet">

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
        @media  screen and (max-width: 800px) {
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
        @media  screen and (max-width: 600px) {

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
        #lol, #loo {
            display:inline-block;
            overflow:hidden;
            white-space: nowrap ;
        }

        #lol {    /* For increasing performance
                       ID/Class should've been used.
                       For a small demo
                       it's okaish for now */
            animation: showup 7s infinite;
        }

        #loo {
            width:0px;
            animation: reveal 7s infinite;
        }

        #loo h6 {
            margin-left:-455px;
            animation: slidein 7s infinite;
        }
        @keyframes  showup {
            0% {opacity:0;}
            20% {opacity:1;}
            80% {opacity:1;}
            100% {opacity:0;}
        }

        @keyframes  slidein {
            0% { margin-left:-800px; }
            20% { margin-left:-800px; }
            35% { margin-left:0px; }
            100% { margin-left:0px; }
        }

        @keyframes  reveal {
            0% {opacity:0;width:0px;}
            20% {opacity:1;width:0px;}
            30% {width:355px;}
            80% {opacity:1;}
            100% {opacity:0;width:355px;}
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-nav-target" data-offset="200">
<div id="app">
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="<?php echo e(asset('theme/js/scripts-dist.js')); ?>"></script>
<script src="<?php echo e(asset('theme/js/main.js')); ?>"></script>
<script>
    // // Set the date we're counting down to
    // var countDownDate = new Date("May 26, 2022").getTime();
    // var now = new Date().getTime();
    //
    // // Find the distance between now and the count down date
    // var distance = countDownDate - now;
    //
    // // Time calculations for days, hours, minutes and seconds
    // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //
    // // Display the result in the element with id="demo"
    // document.getElementById("demo").innerHTML = days + " days";
    // Update the count down every 1 second
</script>
</body>
</html>
<?php /**PATH C:\laragon\www\pragyotsav\resources\views/layouts/app.blade.php ENDPATH**/ ?>