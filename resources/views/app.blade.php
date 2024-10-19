<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="">
    <meta name="author" content="#">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>
   
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('backend') }}/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/files/assets/icon/feather/css/feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/files/assets/css/jquery.mCustomScrollbar.css">

     <!-- Scripts -->
     @routes
     @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
     @inertiaHead

</head>

<body>

    @inertia


    <!-- Required Jquery -->
    <script type="text/javascript" src="{{ asset('backend') }}/files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend') }}/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend') }}/files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend') }}/files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{ asset('backend') }}/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{ asset('backend') }}/files/bower_components/modernizr/js/modernizr.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="{{ asset('backend') }}/files/bower_components/chart.js/js/Chart.js"></script>
    <!-- amchart js -->
    <script src="{{ asset('backend') }}/files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="{{ asset('backend') }}/files/assets/pages/widget/amchart/serial.js"></script>
    <script src="{{ asset('backend') }}/files/assets/pages/widget/amchart/light.js"></script>
    <script src="{{ asset('backend') }}/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend') }}/files/assets/js/SmoothScroll.js"></script>
    <script src="{{ asset('backend') }}/files/assets/js/pcoded.min.js"></script>
    <!-- custom js -->
    <script src="{{ asset('backend') }}/files/assets/js/vartical-layout.min.js"></script>
    <script type="text/javascript" src="{{ asset('backend') }}/files/assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="{{ asset('backend') }}/files/assets/js/script.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>
