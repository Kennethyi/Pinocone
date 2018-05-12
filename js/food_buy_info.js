var elem = document.querySelector('#modal1');
var instance = M.Modal.init(elem);

var elem1 = document.querySelector('#month');
var instance1 = M.FormSelect.init(elem1);

var elem1 = document.querySelector('#year');
var instance2 = M.FormSelect.init(elem1);

var elem1 = document.querySelector('#statee');
var instance3 = M.FormSelect.init(elem1);

var elem1 = document.querySelector('#city');
var instance4 = M.FormSelect.init(elem1);

var elem1 = document.querySelector('#fpp');
var instance5 = M.FormSelect.init(elem1);

var username = "";
var foodpackage = "";
var first_name = "";
var last_name = "";
var address1 = "";
var address2 = "";
var city = "";
var statee = "";
var postcode = "";
var FPP = "";

$(function() {
	
	var jusername = "";
	$.ajax({
			url:"includes/getusersession.php",
			success: function(data){
				jusername = data;
			}
	});
	
	var jfirstname = "";
	
	$.ajax({
			url:"includes/getfirstname.php",
			success: function(response){
				jfirstname = response;
			}
	});
	
	var jlastname = "";
	$.ajax({
			url:"includes/getlastname.php",
			success: function(response){
				jlastname = response;
			}
	});
	
	var jfoodpackage = "";
	$.ajax({
			url:"includes/getfoodpackage.php",
			success: function(data){
				jfoodpackage = data;
			}
	});
	
	$("#save_details").click(function() {
		var errstr = "";
		
		username = jusername;
		first_name = jfirstname;
		last_name = jlastname;
		foodpackage = "Food Package " + jfoodpackage;
		
/* 		first_name = $("#first_name").val();
			if(first_name == "")
				errstr += "First name cannot be empty! ";
		last_name = $("#last_name").val();
			if(last_name == "")
				errstr += "Last name cannot be empty! "; */
		address1 = $("#address1").val();
			if(address1 == "")
				errstr += "Address 1 cannot be empty! ";
		address2 = $("#address2").val();
			if(address2 == "")
				errstr += "Address 2 cannot be empty! ";
		city = $("#city").val();
			if(city == "")
				errstr += "City cannot be empty! ";
       FPP = $("#fpp").val();
			if(FPP == "")
				errstr += "Food Packaging Prefrences cannot be empty! ";
		statee = $("#statee").val();
			if(statee == "")
				errstr += "State cannot be empty! ";
		postcode = $("#postcode").val();
			if(postcode == "")
				errstr += "Postcode cannot be empty! ";
			
		if(errstr != "")
			alert(errstr);
		else 
			instance.open();
	});
	
	$("#save_order").click(function() {
		var orderid = (new Date).getTime();
		
		var dataString = 
		'username=' + username + 
		'&first_name=' + first_name + 
		'&last_name=' + last_name + 
		'&address1=' + address1 + 
		'&address2=' + address2 + 
		'&city=' + city + 
        '&fpp='+FPP+
		'&statee=' + statee + 
		'&postcode=' + postcode + 
		'&foodpackage=' + foodpackage + 
		'&orderid=' + orderid;
		
		//alert (dataString);return false;
		
		$.ajax({
			type: "post",
			url: "includes/food_buy_selection_details.php",
			data: dataString,
			success: function(data) {
			}
		});
		
		instance.close();
		
		alert("Your order has been successfuly added!");
		
		window.location.href = 'food_menu.php';
		
		return false;
	});
	
});