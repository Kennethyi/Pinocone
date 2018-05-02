var app = angular.module("searchApp", []);
	app.controller("searchAppController", ['$scope', '$http', function ($scope, $http) {
		$scope.change = function() {
			var searchOrder = $scope.searchOrder;
			if(searchOrder == undefined){
				searchOrder = '';
			}
			
			$http({
				method: 'post',
				url: '../includes/staff_search_ajax.php',
				data: {searchOrder:searchOrder}
			}).then(function successCallback(response) {
				$scope.orders = response.data;
			});
		};
	}]);