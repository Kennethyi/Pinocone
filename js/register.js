var elem = document.querySelector('#modal1');
var instance = M.Modal.init(elem);

var username = "";
var first_name = "";
var last_name = "";
var password_1="";
var password_2="";
var email = "";
var phnum = "";
var address = "";

$(function()
{
    $("reg_user").click(function(){
        var errstr= "";
        
        username = $("#username").val();
			if(username == "")
				errstr += "Username cannot be empty!";
        first_name = $("#first_name").val();
			if(first_name == "")
				errstr += "First name cannot be empty!";
		last_name = $("#last_name").val();
			if(last_name == "")
				errstr += "Last name cannot be empty!";
        first_name = $("#first_name").val();
			if(first_name == "")
				errstr += "First name cannot be empty!";
		password_1 = $("#password_1").val();
			if(password_1 == "")
				errstr += "The first password cannot be empty!";
        password_2 = $("#password_2").val();
			if(password_2 == "")
				errstr += "The second password cannot be empty! ";
        email = $("#email").val();
			if(email == "")
				errstr += "The email cannot be empty!";
        phnum = $("#phnum").val();
			if(phnum == "")
				errstr += "The phone number cannot be empty!";
        address = $("#address").val();
			if(address == "")
				errstr += "The address cannot be empty!";
        
        if(errstr != ""){
            alert(errstr);
        }
        else {
			instance.open();
		}
    });
});