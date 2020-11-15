$(document).ready(function(){
	
$("#login").click(function(){
	

						var email=$("#singin-email").val();
						var pass=$("#singin-password").val();
						alert(email);
						alert(pass);
					    $.ajax({
                        type: "POST",
                        url: "login-ajax.php",
                        data: {email:email,pass:pass},
                        success: function(data) {
                        $("#sing-in").html(data);
             
   		
            },
            error: function(err) {
				
          
            }
        });
							
						});
	
});

	
	
