//inject angular file upload directives and services.
var angular = angular;
var console = console;

var app = angular.module('fileUpload', ['angularFileUpload']);

app.controller('MyCtrl', ['$scope', '$upload', function ($scope, $upload) {

    $scope.thumbShow=false;

    $scope.$watch('files', function () {
        $scope.upload($scope.files);
    });

    $scope.upload = function (files) {
        $scope.thumbShow=true;
        $scope.thumpnail=files;
        if (files && files.length) {
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                $upload.upload({
                    url: 'upload',
                    fields: {'username': "test"},
                    file: file
                }).progress(function (evt) {
                    var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
                    console.log('progress: ' + progressPercentage + '% ' + evt.config.file.name);
                }).success(function (data, status, headers, config) {
                    console.log('file ' + config.file.name + 'uploaded. Response: ' + data);
                });
            }
        }
    };
}]);