var workshopApp=angular.module('workshopApp',[]);

workshopApp.controller('workshopsCtrl',function($scope, $http){
	$htpp.get().success(function(data){
		$scope.workshops=data;
	});
});