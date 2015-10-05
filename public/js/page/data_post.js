var angular = angular;
var console = console;

var form_input 		= angular.module('form_input', ['angularFileUpload']);
var formPark	 	= angular.module('formPark', ['angularFileUpload']);
var updateUser	 	= angular.module('updateUser', ['angularFileUpload']);
var updatePark	 	= angular.module('updatePark', ['angularFileUpload']);



// store user's data 
form_input.controller('submitController',['$scope','$http','FileUploader',function($scope,$http,FileUploader)
{
	$scope.isError	=false;
	$scope.message 	="";
	$scope.loading	=false;

	$scope.uploader = new FileUploader({
            url: 'upload'
        });

	var uploader =$scope.uploader;	

	 // FILTERS

    uploader.filters.push({
        name: 'customFilter',
        fn: function(item /*{File|FileLikeObject}*/, options) {
            return this.queue.length < 10;
        }
    });

    // CALLBACKS

        uploader.onWhenAddingFileFailed = function(item /*{File|FileLikeObject}*/, filter, options) {
            console.info('onWhenAddingFileFailed', item, filter, options);
        };
        uploader.onAfterAddingFile = function(fileItem) {
            if(uploader.queue.length>1)
            {
                uploader.removeFromQueue(0);
            }
            console.info('onAfterAddingFile', fileItem);
        };
        uploader.onAfterAddingAll = function(addedFileItems) {
            console.info('onAfterAddingAll', addedFileItems);
        };
        uploader.onBeforeUploadItem = function(item) {
            uploader.query=[];
            console.info('onBeforeUploadItem', item);
        };
        uploader.onProgressItem = function(fileItem, progress) {
            console.info('onProgressItem', fileItem, progress);
        };
        uploader.onProgressAll = function(progress) {
            console.info('onProgressAll', progress);
        };
        uploader.onSuccessItem = function(fileItem, response, status, headers) {
            console.info('onSuccessItem', fileItem, response, status, headers);
        };
        uploader.onErrorItem = function(fileItem, response, status, headers) {
            console.info('onErrorItem', fileItem, response, status, headers);
        };
        uploader.onCancelItem = function(fileItem, response, status, headers) {
            console.info('onCancelItem', fileItem, response, status, headers);
        };
        uploader.onCompleteItem = function(fileItem, response, status, headers) {
            console.info('onCompleteItem', fileItem, response, status, headers);
        };
        uploader.onCompleteAll = function() {
            
		$scope.loading = true;

		$http({
			method  : 'POST',
			url 	: 'http://localhost:8000/submit',
			params  : {
				nama 	 : $scope.nama,
				username : $scope.username,
				password : $scope.password,
				email 	 : $scope.email,
				contact  : $scope.contact,
				bio		 : $scope.bio
			}
		}).success(function(data){
			$scope.loading = false;
			$scope.message = "Submit Success";
			window.location.href = '/user';

		}).error(function(errMessage){
			$scope.loading	= true;
			$scope.isError	= true;
			$scope.message 	= errMessage;
		})
        };


}]);


form_input
    // Angular File Upload module does not include this directive
    // Only for example


    /**
    * The ng-thumb directive
    * @author: nerv
    * @version: 0.1.2, 2014-01-09
    */
    .directive('ngThumb', ['$window', function($window) {
        var helper = {
            support: !!($window.FileReader && $window.CanvasRenderingContext2D),
            isFile: function(item) {
                return angular.isObject(item) && item instanceof $window.File;
            },
            isImage: function(file) {
                var type =  '|' + file.type.slice(file.type.lastIndexOf('/') + 1) + '|';
                return '|jpg|png|jpeg|bmp|gif|'.indexOf(type) !== -1;
            }
        };

        return {
            restrict: 'A',
            template: '<canvas/>',
            link: function(scope, element, attributes) {
                if (!helper.support) return;

                var params = scope.$eval(attributes.ngThumb);

                if (!helper.isFile(params.file)) return;
                if (!helper.isImage(params.file)) return;

                var canvas = element.find('canvas');
                var reader = new FileReader();

                reader.onload = onLoadFile;
                reader.readAsDataURL(params.file);

                function onLoadFile(event) {
                    var img = new Image();
                    img.onload = onLoadImage;
                    img.src = event.target.result;
                }

                function onLoadImage() {
                    var width = params.width || this.width / this.height * params.height;
                    var height = params.height || this.height / this.width * params.width;
                    canvas.attr({ width: width, height: height });
                    canvas[0].getContext('2d').drawImage(this, 0, 0, width, height);
                }
            }
        };
    }]);


// update user's data
updateUser.controller('updateUserController',['$scope','$http','FileUploader',function($scope,$http,FileUploader)
{
    $scope.showImage=true;
	$scope.isError	=false;
	$scope.message 	="";
	$scope.loading	=false;



    $scope.uploader = new FileUploader({
            url: 'updateImage'
        });

    $scope.resetQueue = function(){
        uploader.queue=[];
    }

    var uploader =$scope.uploader;  

     // FILTERS

    uploader.filters.push({
        name: 'customFilter',
        fn: function(item /*{File|FileLikeObject}*/, options) {
            return this.queue.length < 10;
        }
    });

    // CALLBACKS

        uploader.onWhenAddingFileFailed = function(item /*{File|FileLikeObject}*/, filter, options) {
            console.info('onWhenAddingFileFailed', item, filter, options);
        };
        uploader.onAfterAddingFile = function(fileItem) {
            $scope.showImage=false;
            if(uploader.queue.length>1)
            {
                uploader.removeFromQueue(0);
            }
            console.info('onAfterAddingFile', fileItem);
        };
        uploader.onAfterAddingAll = function(addedFileItems) {
            console.info('onAfterAddingAll', addedFileItems);
        };
        uploader.onBeforeUploadItem = function(item) {
            uploader.query=[];
            console.info('onBeforeUploadItem', item);
        };
        uploader.onProgressItem = function(fileItem, progress) {
            console.info('onProgressItem', fileItem, progress);
        };
        uploader.onProgressAll = function(progress) {
            console.info('onProgressAll', progress);
        };
        uploader.onSuccessItem = function(fileItem, response, status, headers) {
            console.info('onSuccessItem', fileItem, response, status, headers);
        };
        uploader.onErrorItem = function(fileItem, response, status, headers) {
            console.info('onErrorItem', fileItem, response, status, headers);
        };
        uploader.onCancelItem = function(fileItem, response, status, headers) {
            console.info('onCancelItem', fileItem, response, status, headers);
        };
        uploader.onCompleteItem = function(fileItem, response, status, headers) {
            console.info('onCompleteItem', fileItem, response, status, headers);
        };
        uploader.onCompleteAll = function() {
            $scope.loading = true;

            $http({
                method  : 'POST',
                url     : 'http://localhost:8000/updateUser/'+$scope.iduser,
                params  : {
                    iduser   : $scope.iduser,
                    nama     : $scope.nama,
                    username : $scope.username,
                    password : $scope.password,
                    email    : $scope.email,
                    contact  : $scope.contact,
                    bio      : $scope.bio
                }
            }).success(function(data){
                $scope.loading = false;
                $scope.message = "Update Success";
                window.location.href = '/user';

            }).error(function(errMessage){
                $scope.loading  = true;
                $scope.isError  = true;
                $scope.message  = errMessage;
            })
        };


	$scope.updateData = function()
	{
		$scope.loading = true;

		$http({
			method  : 'POST',
			url 	: 'http://localhost:8000/updateUser/'+$scope.iduser,
			params  : {
				iduser	 : $scope.iduser,
				nama 	 : $scope.nama,
				username : $scope.username,
				password : $scope.password,
				email 	 : $scope.email,
				contact  : $scope.contact,
				bio		 : $scope.bio
			}
		}).success(function(data){
			$scope.loading = false;
			$scope.message = "Update Success";
			window.location.href = '/user';

		}).error(function(errMessage){
			$scope.loading	= true;
			$scope.isError	= true;
			$scope.message 	= errMessage;
		})
	};

     $scope.update   = function()
    {
        if(uploader.queue.length > 0)
        {
            uploader.uploadAll();
        }
        else
        {
            $scope.updateData();
        }
    } 
}]);

updateUser
    // Angular File Upload module does not include this directive
    // Only for example


    /**
    * The ng-thumb directive
    * @author: nerv
    * @version: 0.1.2, 2014-01-09
    */
    .directive('ngThumb', ['$window', function($window) {
        var helper = {
            support: !!($window.FileReader && $window.CanvasRenderingContext2D),
            isFile: function(item) {
                return angular.isObject(item) && item instanceof $window.File;
            },
            isImage: function(file) {
                var type =  '|' + file.type.slice(file.type.lastIndexOf('/') + 1) + '|';
                return '|jpg|png|jpeg|bmp|gif|'.indexOf(type) !== -1;
            }
        };

        return {
            restrict: 'A',
            template: '<canvas/>',
            link: function(scope, element, attributes) {
                if (!helper.support) return;

                var params = scope.$eval(attributes.ngThumb);

                if (!helper.isFile(params.file)) return;
                if (!helper.isImage(params.file)) return;

                var canvas = element.find('canvas');
                var reader = new FileReader();

                reader.onload = onLoadFile;
                reader.readAsDataURL(params.file);

                function onLoadFile(event) {
                    var img = new Image();
                    img.onload = onLoadImage;
                    img.src = event.target.result;
                }

                function onLoadImage() {
                    var width = params.width || this.width / this.height * params.height;
                    var height = params.height || this.height / this.width * params.width;
                    canvas.attr({ width: width, height: height });
                    canvas[0].getContext('2d').drawImage(this, 0, 0, width, height);
                }
            }
        };
    }]);

formPark.controller('ParkController', ['$scope', '$http','FileUploader', function($scope, $http,FileUploader)
{

	var arrayImage;
	$scope.isError = false;
	$scope.message = "";
	$scope.loading = false;

	$scope.uploader = new FileUploader({
            url: 'upload'
        });

	var uploader =$scope.uploader;	

	 // FILTERS

    uploader.filters.push({
        name: 'customFilter',
        fn: function(item /*{File|FileLikeObject}*/, options) {
            return this.queue.length < 10;
        }
    });


    // CALLBACKS


    uploader.onCompleteItem = function(fileItem, response, status, headers) {

//        console.info('onCompleteItem', fileItem, response, status, headers);
        
        var arrayItem = JSON.parse(JSON.stringify(response));
        arrayImage[arrayImage.length]=arrayItem.aaa;
        //console.log(arrayImage);
    };

    uploader.onCompleteAll = function() {
    	console.info(arrayImage);
    	$scope.loading = true;

		$http({
			method	: 'POST',
			url		: 'http://localhost:8000/submitPark',
			params	: {
				nama_park	: $scope.nama_park,
				alamat		: $scope.alamat,
				longitude	: $scope.longitude,
				latitude	: $scope.latitude,
				deskripsi	: $scope.deskripsi,
				foto		: JSON.stringify(arrayImage)
			}
		}).success(function(data){
			$scope.loading			= false;
			$scope.message 			= "Submit Park Success";
			window.location.href	= '/park';
		}).error(function(errMessage){
			$scope.loading = true;
			$scope.message = errMessage;
			$scope.isError = true; 
		})
        };

	$scope.submitPark = function()
	{
		arrayImage=new Array();
		uploader.uploadAll();
	}
}]);


formPark
    // Angular File Upload module does not include this directive
    // Only for example


    /**
    * The ng-thumb directive
    * @author: nerv
    * @version: 0.1.2, 2014-01-09
    */
    .directive('ngThumb', ['$window', function($window) {
        var helper = {
            support: !!($window.FileReader && $window.CanvasRenderingContext2D),
            isFile: function(item) {
                return angular.isObject(item) && item instanceof $window.File;
            },
            isImage: function(file) {
                var type =  '|' + file.type.slice(file.type.lastIndexOf('/') + 1) + '|';
                return '|jpg|png|jpeg|bmp|gif|'.indexOf(type) !== -1;
            }
        };

        return {
            restrict: 'A',
            template: '<canvas/>',
            link: function(scope, element, attributes) {
                if (!helper.support) return;

                var params = scope.$eval(attributes.ngThumb);

                if (!helper.isFile(params.file)) return;
                if (!helper.isImage(params.file)) return;

                var canvas = element.find('canvas');
                var reader = new FileReader();

                reader.onload = onLoadFile;
                reader.readAsDataURL(params.file);

                function onLoadFile(event) {
                    var img = new Image();
                    img.onload = onLoadImage;
                    img.src = event.target.result;
                }

                function onLoadImage() {
                    var width = params.width || this.width / this.height * params.height;
                    var height = params.height || this.height / this.width * params.width;
                    canvas.attr({ width: width, height: height });
                    canvas[0].getContext('2d').drawImage(this, 0, 0, width, height);
                }
            }
        };
    }]);


updatePark.controller('updateParkController', ['$scope', '$http','FileUploader', function($scope, $http,FileUploader)
{
	   $scope.isError = false;
    $scope.message = "";
    $scope.loading = false;
    var arrayImageDel=new Array();
    var arrayImage;
    $scope.uploader = new FileUploader({
            url: 'updateImage'
        });

    var uploader =$scope.uploader;  

     // FILTERS

    uploader.filters.push({
        name: 'customFilter',
        fn: function(item /*{File|FileLikeObject}*/, options) {
            return this.queue.length < 10;
        }
    });


    // CALLBACKS
    uploader.onAfterAddingFile = function(fileItem) {
            console.info('onAfterAddingFile', fileItem);
        };

    uploader.onCompleteItem = function(fileItem, response, status, headers) {

       console.info('onCompleteItem', fileItem, response, status, headers);
        
        var arrayItem = JSON.parse(JSON.stringify(response));
        arrayImage[arrayImage.length]=arrayItem.aaa;
        console.log(arrayImage);
    };

    uploader.onCompleteAll = function() {
        console.info(arrayImage);
        $scope.loading = true;

        $http({
            method  : 'POST',
            url      : 'http://localhost:8000/updatePark/'+$scope.idpark,
            params  : {
                idpark      : $scope.idpark,
                nama_park   : $scope.nama_park,
                alamat      : $scope.alamat,
                longitude   : $scope.longitude,
                latitude    : $scope.latitude,
                deskripsi   : $scope.deskripsi,
                listDel     : JSON.stringify(arrayImageDel),
                foto        : JSON.stringify(arrayImage)
            }
        }).success(function(data){
            $scope.loading          = false;
            $scope.message          = "Update Park Success";
            window.location.href    = '/park';
        }).error(function(errMessage){
            $scope.loading = true;
            $scope.message = errMessage;
            $scope.isError = true; 
        })
        };
    $scope.addList=function(index)
    {
        arrayImageDel[arrayImageDel.length]=index;
    }

    $scope.updateParkData = function()
    {
        $scope.loading = true;

        $http({
            method  : 'POST',
            url     : 'http://localhost:8000/updatePark/'+$scope.idpark,
            params  : {
                idpark      : $scope.idpark,
                nama_park   : $scope.nama_park,
                alamat      : $scope.alamat,
                longitude   : $scope.longitude,
                latitude    : $scope.latitude,
                deskripsi   : $scope.deskripsi,
                listDel     : JSON.stringify(arrayImageDel)
            }
        }).success(function(data){
            $scope.loading          = false;
            $scope.message          = "Update Park Success";
            window.location.href = '/park';
        }).error(function(errMessage){
            $scope.loading = true;
            $scope.message = errMessage;
            $scope.isError = true; 
        })
    }


    $scope.submitPark = function()
    {
        arrayImage=new Array();
        //when no new upload file
        if(uploader.queue==0)
        {
            console.log("masuk");
            $scope.updateParkData();
        }
        //when there are new upload files
        else
        {
            uploader.uploadAll();
        }
    }
}
]);

updatePark
    // Angular File Upload module does not include this directive
    // Only for example


    /**
    * The ng-thumb directive
    * @author: nerv
    * @version: 0.1.2, 2014-01-09
    */
    .directive('ngThumb', ['$window', function($window) {
        var helper = {
            support: !!($window.FileReader && $window.CanvasRenderingContext2D),
            isFile: function(item) {
                return angular.isObject(item) && item instanceof $window.File;
            },
            isImage: function(file) {
                var type =  '|' + file.type.slice(file.type.lastIndexOf('/') + 1) + '|';
                return '|jpg|png|jpeg|bmp|gif|'.indexOf(type) !== -1;
            }
        };

        return {
            restrict: 'A',
            template: '<canvas/>',
            link: function(scope, element, attributes) {
                if (!helper.support) return;

                var params = scope.$eval(attributes.ngThumb);

                if (!helper.isFile(params.file)) return;
                if (!helper.isImage(params.file)) return;

                var canvas = element.find('canvas');
                var reader = new FileReader();

                reader.onload = onLoadFile;
                reader.readAsDataURL(params.file);

                function onLoadFile(event) {
                    var img = new Image();
                    img.onload = onLoadImage;
                    img.src = event.target.result;
                }

                function onLoadImage() {
                    var width = params.width || this.width / this.height * params.height;
                    var height = params.height || this.height / this.width * params.width;
                    canvas.attr({ width: width, height: height });
                    canvas[0].getContext('2d').drawImage(this, 0, 0, width, height);
                }
            }
        };
    }]);
