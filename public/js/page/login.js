var angular = angular;
var console = console;

var loginApp    = angular.module('loginApp', []);

loginApp.controller('loginController',['$scope','$http',function($scope,$http)
{	
	$scope.isError	=false;
	$scope.message 	="";
	$scope.loading	=false;

	$scope.submitLogin=function()
	{
		$scope.loading	=true;
		//request get ke API
		$http({
			method	: 'GET',
			url		: 'api/login',
			params	: {
				username	: $scope.username,
				password	: $scope.password
			}
		}).success(function (data){

			if(data.response === "OK" && data.status_code == 200 && data.message === "Login success.")
			{
				data.message="";
				$http({
					method	: 'POST',
					url		: 'setSession',
					params	: {
						username	: $scope.username
					}
				}).success(function(data){
					if(data.response === "OK" && data.status_code == 200 && data.message === "success set session")
					{
						window.location.href = '/home';
					}
				}).error(function(errMessage){
					console.log("masuk");
					$scope.loading	= true;
					$scope.isError	= true;
					$scope.message 	= errMessage;
				})
			}
			else
			{
				console.log("masuk");
				$scope.loading	= false;
				$scope.isError	= true;
				$scope.message 	= data.message;
			}
			
			$scope.message 	= data.message;
		}).error(function(errMessage){
			console.log("masuk");
			$scope.loading	= false;
			$scope.isError	= true;
			$scope.message 	= errMessage;
		})
	}
}]);


