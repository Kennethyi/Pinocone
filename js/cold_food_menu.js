/*jslint white:true */
/*global angular */
var app = angular.module("food_menu", []);
app.controller("food_ctrl", ["$scope", "$http",
    function($scope, $http) {
		$http({
			method: 'get',
			url: './includes/cold_food_menu_data.php'
		}).then(function successCallback(response) {
			$scope.food_package = response.data.food_package;
		});
    }]);