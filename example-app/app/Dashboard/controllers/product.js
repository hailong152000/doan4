var app = angular.module('AppProduct', []);
app.controller("ProductCtrl", function ($scope, $http) {
    $scope.current_url = current_url; 
    $scope.list;
    $scope.pageSize = '10';
    $scope.page = '1';
    $scope.product;
    $scope.LoadProduct= function () {
        $http({
            method: 'GET',
            url: $scope.current_url + '/api/item/get-all',
        }).then(function (response) { 
            $scope.list = response.data;  
        });
    };
});