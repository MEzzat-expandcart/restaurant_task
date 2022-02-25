<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome/css/all.min.css')}}" media="all">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
    <style>
        * {
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            margin: 0;
            padding: 0;
        }

        .table {
            display: table;
            width: 100%;
            height: 100%;
            table-layout: fixed;
        }

        .row {
            display: table-row;
        }

        .cell {
            display: table-cell;
        }

        .header {
            display: table-header-group;
        }

        .expand-logo{
            width: 150px;
        }

        .auth-image {
            background-image: url("{{asset('assets/portal-images/auth-photo.png')}}");
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }

        .auth-section{
            margin: 0 auto;
            width:80%;
        }
        .expand-center-element{
            text-align: center;
            display: block;
        }
        .expand-center-image{
            display: block;
            margin: auto;
        }

    </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="container-fluid wrapper">
    <div class='table'>
        <div class='row'>
            <div class='cell'>
                <header>
                    <div class="d-flex justify-content-between">
                        <div class="p-2"><a src="#"><img class="expand-logo" src="{{asset('assets/portal-images/ExpandLogo.png')}}"></a></div>
                        <div class="p-2">
                            <button class="btn btn-default">
                                <img src="{{asset('assets/portal-images/EG.png')}}" width="20" /> العربيه
                            </button>
                        </div>
                    </div>
                </header>
                <div class="auth-section">@yield('content')</div>
            </div>
            <div class='cell auth-image'></div>
        </div>
    </div>
</div>
<!-- ./wrapper -->
<div class="fixed-bottom" style="width: 50%;">
    <div class="d-flex justify-content-between">
        <div class="p-2"><i class="fa fa-copyright"></i> <a href="#">ExpandCart</a></div>
        <div class="p-2"><i class="fa fa-light fa-envelope"></i>
            <a href = "mailto: help@expandcart.com">help@expandcart.com</a>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/js/demo.js') }}"></script>
</body>
</html>
