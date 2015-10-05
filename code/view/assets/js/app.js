var workshopApp=angular.module('workshopApp',['ngRoute']);

workshopApp.config(function($routeProvider){
	$routeProvider
		.when('/',
			  {
				templateUrl:"partials/workshops.html",
				controller:'workshopsCtrl'
			  }
		)
		.when('/sa',
			  {
				template:"partials/new_workshop.html",
				controller:'workshopsCtrl'
			  }
		)
		.otherwise({redirectTo:'/'});
});

workshopApp.controller('workshopsCtrl',function($scope, $http){
	$http.get("http://51.254.132.239:8081/projet/controler/getWorkshops.php").success(function(data){
		$scope.workshops=data;
	});
});