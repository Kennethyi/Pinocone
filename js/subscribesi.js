var elem = document.querySelector('#modal1');
var instance = M.Modal.init(elem);

var elem1= document.querySelector('#month');
var instance1 = M.FormSelect.init(elem1);

var elem1 = document.querySelector('#year');
var instance2= M.FormSelect.init(elem1);

var username ="";
var first_name="";
var last_name= "";
var password= "";
var password1= "";
var email ="";

$(function(){
    
    var jusername = "";
    $.ajax({
        url:"includes/getusersession.php",
        success: function(data){
        jusername= data;
        }
        
        
    });
    
//save button
    $("#save_memberdetails").click(function(){
        
        var errstr ="";
        
        username= jusername;
        
        first_name = $("#first_name").val();
        if(first_name == "")
            errstr += "First name cannot be empty!";
        last_name = $("#last_name").val();
			if(last_name == "")
				errstr += "Last name cannot be empty! ";
        email = $('#email').val();
        if(email == "")
        password = $("#password").val();
        if(password == " ")
            errstr += "Password cannot be empty!" ;
        password1 = $("#password1").val();
        if(password1 != password)
            errstr += "Password must be the same with the one entered above!";
        
        if(errstr != "")
            alert(errstr);
        else{
            instance.open();
        }
        
        
        
    });
                                  
                                  
                                  
                                  
    
    $("#save_member").click(function(){
        var memberid= (new Date).getTime();
        
        var dataString=
            'username=' + username +
            '&first_name=' + first_name +
            '&last_name' + last_name +
            '&email' + email +
            '&password' + password +
            '&memberid' +memberid;
        
        alert(dataString); 
        return false;
        
        $.ajax({
            
            type: "post",
            url: "includes/user_details.php",
            data: dataString,
            success: function(data){
                
            }
            
            
        });
        
        instance.close();
        alert("Your membership subscription has been successfully accepted");
        
        window.location.href ='food_menu.php';
        
        return false;
        
        
        
        
        
        
        
    });
    
});
    
    
    
    
    

 
 
 
 
 
 
 
