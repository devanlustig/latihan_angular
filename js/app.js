

var MyApp = angular.module("MyApps", ['ngRoute','angularUtils.directives.dirPagination']);


//directive
	MyApp.directive('menuTitle',function(){

	return{
		restirct : 'A',
		templateUrl : 'menu.html'
	}
	});

	MyApp.directive('modalFormPelanggan',function(){

	return{
		restirct : 'E',
		templateUrl : 'formPelanggan.html'
	}
	});

	MyApp.directive('modalFormUsers',function(){

	return{
		restirct : 'E',
		templateUrl : 'formUsers.html'
	}
	});


//route
MyApp.config(function($routeProvider){

	$routeProvider
	.when('/pelanggan',{
		templateUrl : 'pelanggan.html',
		//controller : 'add'
	})

	$routeProvider
	.when('/users',{
		templateUrl : 'users.html',
		//controller : 'add'
	})

	.when('/home',{
		templateUrl: 'home.html',
	})

	.when('/fibonaci',{
		templateUrl: 'fibonaci.html',
	})

	.otherwise({redirectTo:'home'});
});

MyApp.controller('Test', function($scope) {
    $scope.inputty = '';
    $scope.$watch('inputty',function(){
        console.log($scope.inputty);
        if($scope.inputty==""){
            $scope.output="Please Input Fibonacci Number";
        }else
        if($scope.inputty=="1"){
            $scope.output="0, 1";
        }else
        if($scope.inputty=="2"){
            $scope.output="0, 1, 1";
        }else
        if($scope.inputty=="3"){
            $scope.output="0, 1, 1, 2";
        }else
        if($scope.inputty=="5"){
            $scope.output="0, 1, 1, 2, 3";
        }else
        if($scope.inputty=="8"){
            $scope.output="0, 1, 1, 2, 3, 5, 8";
        }else
        if($scope.inputty=="13"){
            $scope.output="0, 1, 1, 2, 3, 5, 8, 13";
        }
        else{
            $scope.output="Invalid Fibonacci Number";
        }
    });
    });