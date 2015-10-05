<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="fonts/favicon.ico">
    <title>RTH Kudus</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lib/angular.min.js"></script>
    <script src="js/page/login.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body ng-app="loginApp" style="background-color:#C8E6C9">
    <div class="container-fluid" style="margin-top:80px" ng-controller="loginController">
        <div class="row">
            <center>
                <h1 style="font-weight:200">Sintem Informasi <br> Ruang Terbuka Hijau <br> Kabupaten Kudus</h1>
            </center>
            
            <div ng-hide="!isError" ng-init="message='sssss'" class="col-sm-4 col-md-4 col-md-offset-4 alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <center><strong>@{{message}}</strong></center>
            </div>
            <div class="col-sm-4 col-md-4 col-md-offset-4" style="border: 1px solid grey; border-radius:5px; padding:40px; background-color:whitesmoke">
                
                <form ng-submit="submitLogin()">
                    <div class="col-sm-10 col-md-10 col-md-offset-1" style="padding-bottom:30px">
                    
                            <input style="height:50px" type="text" ng-model="username" class="form-control" placeholder="username" required>
                            &nbsp;
                            <input style="height:50px" type="password" ng-model="password" class="form-control" placeholder="password" required>
                    </div>
                        
                    <center><button style="width:30%" ng-hide="loading" type="submit" class="btn btn-primary">login</button>
                        <img ng-hide="!loading" src="images/loading.gif" class="img-circle">
                        
                    </center>
                </form>
            </div>
        </div>
    </div>


</body>
</html>