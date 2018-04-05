/*jslint white:true */
/*global angular */
var app = angular.module("food_menu", []);
app.controller("food_ctrl",
    function($scope){
		
		/* Food menu array data */
		$scope.food_list = [
		{food_name: 'Food Menu 1', desc: 'Spaghetti made from whole grain wheat with peas.'},
		{food_name: 'Food Menu 2', desc: 'Fresh strawberries with cucumber for dessert.'},
		{food_name: 'Food Menu 3', desc: 'Beef meatball made from real beef with no crushed bone.'},
		{food_name: 'Food Menu 4', desc: 'Beef slice made from real beef with chicken slice made from real chicken.'},
		{food_name: 'Food Menu 5', desc: 'Biryani rice cooked with pineapple for additional flavour.'},
		{food_name: 'Food Menu 6', desc: 'Assorted fresh fruit for desserts.'},
		{food_name: 'Food Menu 7', desc: 'Assorted peas and peanuts.'},
		{food_name: 'Food Menu 8', desc: 'Homemade salad with bread made from natural ingredients.'},
		{food_name: 'Food Menu 9', desc: 'Homemade meat pie made from natural ingredients.'},
		{food_name: 'Food Menu 10', desc: 'Freshly prepared scallops and shrimp.'},
		{food_name: 'Food Menu 11', desc: 'Assorted pickled fruits.'},
		{food_name: 'Food Menu 12', desc: 'Ham made from real pork with eggs, olives and dessert.'}
		]
    });