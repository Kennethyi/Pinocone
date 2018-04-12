var elem = document.querySelector('#modal1');
var instance = M.Modal.init(elem);

var elem1 = document.querySelector('#month');
var instance1 = M.FormSelect.init(elem1);

var elem1 = document.querySelector('#year');
var instance2 = M.FormSelect.init(elem1);

$(function() {
	var jusername;
	$.ajax({
			url:"includes/getusersession.php",
			success: function(data){
				jusername = data;
			}
	});
	$("#save_details").click(function() {
		var errstr = "";
		var username = jusername;
		var first_name = $("#first_name").val();
			if(first_name == "")
				errstr += "First name cannot be empty! ";
		var last_name = $("#last_name").val();
			if(last_name == "")
				errstr += "Last name cannot be empty! ";
		var address1 = $("#address1").val();
			if(address1 == "")
				errstr += "Address 1 cannot be empty! ";
		var address2 = $("#address2").val();
			if(address2 == "")
				errstr += "Address 2 cannot be empty! ";
		var city = $("#city").val();
			if(city == "")
				errstr += "City cannot be empty! ";
		var statee = $("#statee").val();
			if(statee == "")
				errstr += "State cannot be empty! ";
		var postcode = $("#postcode").val();
			if(postcode == "")
				errstr += "Postcode cannot be empty! ";
		
		if(errstr != "")
			alert(errstr);
		else {
			var dataString = 
			'username=' + username +
			'&first_name=' + first_name + 
			'&last_name=' + last_name + 
			'&address1=' + address1 + 
			'&address2=' + address2 + 
			'&city=' + city + 
			'&statee=' + statee + 
			'&postcode=' + postcode;
			//alert (dataString);return false;
			$.ajax({
				type: "post",
				url: "includes/food_buy_selection_details.php",
				data: dataString,
				success: function(data) {
					instance.open();
				}
			});
			return false;
		}
	});
});