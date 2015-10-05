var workshopApp=angular.module('workshopApp',['ngRoute']);

workshopApp.config(function($routeProvider){
	$routeProvider
		.when('/',
			  {
				templateUrl:"partials/workshops.html",
				controller:'workshopsCtrl'
			  }
		)
		.when('/workshop',
			  {
				templateUrl:"partials/new_workshop.html",
				controller:'createWorkshopCtrl'
			  }
		)
		.when('/workshop/:id',
			  {
				templateUrl:"partials/update_workshop.html",
				controller:'updateWorkshopCtrl'
			  }
		)
		.when('/workshop/delete/:id',
			  {
				templateUrl:"partials/delete_workshop.html",
				controller:'deleteWorkshopCtrl'
			  }
		)
		.otherwise({redirectTo:'/'});
});

workshopApp.controller('workshopsCtrl',function($scope, $http){
	$http.get("server/query.php").success(function(data){
		$scope.workshops=data;
	});
});

workshopApp.controller('updateWorkshopCtrl',function($scope, $http, $routeParams){
	$http.post(
		"server/get.php",
		{
			'id': $routeParams.id
		}
	)
	.success(
		function(data){
            $scope.workshop=data;
        }
	);
});

workshopApp.controller('deleteWorkshopCtrl',function($scope, $http, $routeParams){
		$http.post(
			"server/remove.php",
			{
				'id': $routeParams.id
			}
		)
        .success(
        	function(data){
            	console.log("removed Successfully");
        	}
        )
        .error(
        	function(data){
        		console.log(error);
        	}
        );
});

workshopApp.controller('createWorkshopCtrl',function($scope, $http){
	$scope.createWorkshop=function(){
		$http.post(
			"server/insert.php",
			{
				'name': $scope.name,
				'subject': $scope.subject,
				'location': $scope.location,
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