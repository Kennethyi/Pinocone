/*jslint white:true */
/*global angular */
var app = angular.module("mem_reg", []);
app.controller("mem_ctrl", ["$scope", "$http",
    function($scope, $http) {
		$http({
			method: 'get',
			url: './includes/membership_data.php'
		}).then(function successCallback(response) {
			$scope.Member = response.data.Member;
		});
    }]);