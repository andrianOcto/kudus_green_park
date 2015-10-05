<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="fonts/favicon.ico">
    <title>Starter Template for Bootstrap</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <script src="js/lib/angular.min.js"></script>
    <script src="js/page/login.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body ng-app="loginApp">
    <div class="container-fluid" style="margin-top:100px" ng-controller="loginController">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-md-offset-4" style="border: 1px solid grey; border-radius:5px; padding:40px">
                
                <form ng-submit="submitLogin()">
                    <div class="col-sm-10 col-md-10 col-md-offset-1" style="padding-bottom:30px">
                    
                            <input type="text" ng-model="username" class="form-control" placeholder="username" required>
                            &nbsp;
                            <input type="password" ng-model="password" class="form-control" placeholder="password" required>
                    </div>
                        
                    <center><button ng-hide="loading" type="submit" class="btn btn-primary">login</button>
                        <img ng-hide="!loading" height="72" width="72" src="images/loading.gif" class="img-circle">
                        <br><br>
                        <a href="#">forgot password</a>
                        <p ng-hide="!isError" class="text-danger"  ng-init="message='sssss'">@{{message}}</p>
                    </center>
                </form>
            </div>
        </div>
    </div>


</body>
</html>