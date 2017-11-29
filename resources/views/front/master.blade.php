<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Acreage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('/front/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('/front/')}}/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('/front/')}}/css/custom.css" rel="stylesheet" type="text/css" media="all" />

    <!-- js -->
    <script type="text/javascript" src="{{asset('/front/')}}/js/jquery-2.1.4.min.js"></script>
    <script src="{{asset('/front/')}}js/bootstrap.js"></script>

    <!-- //js -->
    <!-- banner-slider -->
    <script type="text/javascript" src="{{asset('/front/')}}/js/jquery.devrama.slider-0.9.4.js"></script>

    <link href='{{asset('/front/')}}/css/simplelightbox.css' rel='stylesheet' type='text/css'>
    <!-- //banner-slider -->
    <!-- animation-effect -->
    <link href="{{asset('/front/')}}/css/animate.min.css" rel="stylesheet">
    <script src="{{asset('/front/')}}/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- //animation-effect -->
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('/front/')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{asset('/front/')}}js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

</head>

<body>
@include('front.includes.header')

@yield ('content');

@include('front.includes.footer')

<!-- //header -->
<!-- banner -->


<!-- //testimonials -->
