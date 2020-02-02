<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{URL::asset('backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{URL::asset('backend/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{URL::asset('backend/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{URL::asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{URL::asset('backend/css/custom.min.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('backend.layouts.sidebar')

        @include('backend.layouts.header')

        @yield('content')

        @include('backend.layouts.footer')
    </div>
</div>

<!-- jQuery -->
<script src="{{URL::asset('backend/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{URL::asset('backend/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('backend/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{URL::asset('backend/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{URL::asset('backend/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- jQuery Sparklines -->
<script src="{{URL::asset('backend/vendors/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- Flot -->
<script src="{{URL::asset('backend/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('backend/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('backend/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{URL::asset('backend/vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{URL::asset('backend/vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{URL::asset('backend/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{URL::asset('backend/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{URL::asset('backend/vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{URL::asset('backend/vendors/DateJS/build/date.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{URL::asset('backend/vendors/moment/min/moment.min.js')}}"></script>
<script src="{{URL::asset('backend/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

<!-- Custom Theme Scripts -->
<script src="{{URL::asset('backend/js/custom.min.js')}}"></script>
@yield('scripts')
</body>
</html>