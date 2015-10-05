var workshopApp=angular.module('workshopApp',['ngRoute']);

workshop.config(function($routeProvider){
	$routeProvider
		.when('/',
			  {
				template:"<h3>ok</h3>",
				controller:'workshopsCtrl'
			  }
		)
		.when('/sa',
			  {
				template:"<h3>ok 2</h3>",
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