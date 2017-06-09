<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{url('admin/images/favicon.ico')}}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/plugins/toastr/toastr.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/plugins/morris/morris.css')}}">
    <link href="{{url('admin/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />
    <link href="{{url('admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>

    <![endif]-->
    <script src="{{url('admin/js/modernizr.min.js')}}"></script>
@yield('css')
<body class="fixed-left">
<div id="wrapper">


    @yield('content')


    @include('layouts.admin.footer')

    <script>
        var resizefunc = [];
    </script>
    <script src="{{url('admin/js/jquery.min.js')}}"></script>
    <script src="{{url('admin/js/tether.min.js')}}"></script>
    <script src="{{url('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{url('admin/js/waves.js')}}"></script>
    <script src="{{url('admin/js/jquery.nicescroll.js')}}"></script>
    <script src="{{url('admin/plugins/switchery/switchery.min.js')}}"></script>

    <script src="{{url('admin/plugins/raphael/raphael-min.js')}}"></script>
    <script src="{{url('admin/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{url('admin/plugins/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{url('admin/plugins/parsleyjs/parsley.min.js')}}"></script>
    <script src="{{url('admin/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{url('admin/js/jquery.core.js')}}"></script>
    <script src="{{url('admin/js/jquery.app.js')}}"></script>




@yield('js')
</body>
</html>