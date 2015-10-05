<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{ URL::asset('images/logo-hiddenpark.png') }}">

    <title>Hidden Park Administrator</title>

    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/jquery.ad-gallery.css') }}" rel="stylesheet">
          
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::asset('js/lib/angular.min.js') }}"></script> 
  <script src="{{ URL::asset('js/angular-file-upload.min.js') }}"></script> 
  <script src="{{ URL::asset('js/jquery.ad-gallery.js') }}"></script>
  <style type="text/css">
    #gallery{
      padding: 10px;
    }
  </style>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#5cb85c; color:white">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" style="color:white"><b>Hidden Park Administrator</b></a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><img class="img-circle" style="width:40px; margin-top:5px; margin-left:15px" src="{{ URL::asset('files/photos/user') }}/{{ Session::get('foto') }}"></li>
            <li>
                <a href="view-user.php" style="color:black"> {{ Session::get('username'); }}
                </a>
            </li>
            <li><a href="/logout" style="color:black">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="container-fluid">
        <div class="row" style="margin-top:50px">
            <div class="col-sm-3 col-md-3">
                <center><img src="{{ URL::asset('images/logo-hiddenpark.png') }}" style="width:170px; padding-top:20px; padding-bottom:30px;"></center>
                <ul class="nav nav-pills nav-stacked" style="padding-left:20px">
                    <li style="border-right: 4px solid #428bca"><a href="/home"><p align="center" style="color:black"><b>Dashboard</b></p></a></li>
                    <li style="border-right: 4px solid #5cb85c"><a href="/park"><p align="center" style="color:black"><b>Park</b></p></a></li>
                    <li style="border-right: 4px solid #f0ad4e"><a href="/user"><p align="center" style="color:black"><b>Users</b></p></a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-md-9" style="margin-top:20px">