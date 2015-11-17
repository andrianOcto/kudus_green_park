<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RTH Kab. Kudus</title>

    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ URL::asset('js/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/lib/angular.min.js') }}"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <style>
        .row{
            margin-left:0px;
            margin-right:0px;
        }
        body{
            background-color: #e3fcd7;
        }
        .nav-tabs > li.active > a, 
        .nav-tabs > li.active > a:focus, 
        .nav-tabs > li.active > a:hover {
            background-color: #4CAF50;
            color: white;
            border-color: #4CAF50;
        }
        .nav-tabs > li > a:hover {
            background-image: url("{{ URL::asset('images/back_green.png') }}");
            color: black;
            background-color: transparent;
        }
        .nav-tabs > li > a{
            color: black;
            font-weight: 500;
        }
    </style>
  </head>
<body style="margin:0px">
    <!--  navigation  -->
    <div class="row" style="margin-top:10px">
        <a href="/"><img style="max-width:98%" src="{{ URL::asset('images/banner_rth.png') }}"></a>
    </div>
    <nav class="navbar navbar-default" style="border-color:#4CAF50; background-color:#4CAF50; border-radius:0px; margin-bottom:0px">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button style="border-color:transparent" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span style="background-color:white" class="icon-bar"></span>
                    <span style="background-color:white" class="icon-bar"></span>
                    <span style="background-color:white" class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="color:white" href="/"><strong>HOME</strong></a></li>
                    <li><a style="color:white" href="/rth"><strong>TEMUKAN RUANG TERBUKA HIJAU</strong></a></li>
                    <li><a style="color:white" href="/tentangrth"><strong>TENTANG RUANG TERBUKA HIJAU</strong></a></li>
                    <li><a style="color:white" href="/tentangkami"><strong>TENTANG KAMI</strong></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>