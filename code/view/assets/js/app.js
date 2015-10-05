var workshopApp=angular.module('workshopApp',[]);

workshopApp.controller('workshopsCtrl',function($scope, $http){
	$http.get("http://51.254.132.239:8081/projet/controler/getWorkshops.php").success(function(data){
		$scope.workshops=data;
	});
});