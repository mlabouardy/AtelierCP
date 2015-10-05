var workshopApp=angular.module('workshopApp',['ngRoute']);

workshopApp.config(function($routeProvider){
	$routeProvider
		.when('/',
			  {
				templateUrl:"partials/workshops.html",
				controller:'workshopsCtrl'
			  }
		)
		.when('/create',
			  {
				templateUrl:"partials/new_workshop.html",
				controller:'createWorkshopCtrl'
			  }
		)
		.otherwise({redirectTo:'/'});
});

workshopApp.controller('workshopsCtrl',function($scope, $http){
	$http.get("http://51.254.132.239:8081/projet/controler/getWorkshops.php").success(function(data){
		$scope.workshops=data;
	});
});

workshopApp.controller('createWorkshopCtrl',function($scope, $http){
	$scope.createWorkshop=function(){
		$http.post(
			"server/insert.php",
			{
				'name': $scope.fname,
				'subject': $scope.subject,
				'location': $scope.locationW,
				'hours': $scope.hours,
				'laboratory': $scope.laboratory,
				'animator': $scope.animator
			}
		)
        .success(
        	function(data){
            	console.log("inserted Successfully");
        	}
        );
	};

});