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
		.otherwise({redirectTo:'/'});
});

workshopApp.controller('workshopsCtrl',function($scope, $http){
	$http.get("server/query.php").success(function(data){
		$scope.workshops=data;
	});

	$scope.deleteWorkshop=function(workshopID){
		$http.post(
			"server/remove.php",
			{
				'id': workshopID
			}
		)
        .success(
        	function(data){
        		$http.get("server/query.php").success(function(data){
					$scope.workshops=data;
				});
            	console.log("Deleted Successfully");
        	}
        )
        .error(
        	function(data){
        		console.log(error);
        	}
        );
	}
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

	$scope.updateWorkshop=function(){
		$http.post(
			"server/update.php",
			{
				'id': $scope.workshop.id,
				'name': $scope.workshop.name,
				'subject': $scope.workshop.subject,
				'location': $scope.workshop.location,
				'hours': $scope.workshop.hours,
				'laboratory': $scope.workshop.laboratory,
				'animator': $scope.workshop.animator
			}
		)
        .success(
        	function(data){
            	console.log("Updated Successfully");
        	}
        )
        .error(
        	function(data){
        		console.log(error);
        	}
        );
	};
});

workshopApp.controller('createWorkshopCtrl',function($scope, $http, $location){
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
            	$window.path = '/';
        	}
        );
	};

});