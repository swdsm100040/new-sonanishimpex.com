//regi page
$(document).ready(function(){
	$("#btn_submit").on('click',function(){
		console.log('contactform please');
		var status = true;

		var name = $("#fname").val();
		if(name == ''){
		    status = false;
		   $("#error-fname").html('please enter name');
		}else{
		    var regex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
            if (regex.test(name)==false) {
                status = false;
                $("#error-fname").html('please enter valid name');
            }
            else {
            	 status = true;
		        $("#error-fname").html(' ');
            }
		}

		var name = $("#fcname").val();
		if(name == ''){
		    status = false;
		   $("#error-fcname").html('please enter Company Name');
		}else{
		    var regex = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;
            if (regex.test(name)==false) {
                status = false;
                $("#error-fcname").html('please enter valid Company Name');
            }
            else {
            	 status = true;
		        $("#error-fcname").html(' ');
            }
		}





			var email = $("#e-mail").val();
			if(email == ''){
			    status = false;
			    $("#error-e-mail").html("Please Enter Email");
			}else{
			    var regex = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	            var test = regex.test(email);
	            if (test === false) {
	                status = false;
	                $("#error-e-mail").html('Enter the valid email');
	            }else{
	            	  $("#error-e-mail").html(' ');
	            }
			}

		var contact = $("#phone").val();
		$("#error-phone").html('');
		if(contact == ''){
		    status = false;
		    $("#error-phone").html("Please Enter Mobile Number");
		}else{
		    var regex = /^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/;
            var test = regex.test(contact);
            if (test === false) {
                status = false;
                $("#error-phone").html('Enter The Valid Contact Number');
            }else{
            	 $("#error-phone").html("");
            }
		}
		var subject = $("#subject").val();
		$("#error-subject").html('');
		if(contact == ''){
		    status = false;
		    $("#error-subject").html("Please Enter subject");
		}else{		    
            	 $("#error-subject").html("");
		}
		var message = $("#msg").val();
		$("#error-message").html('');
		if(contact == ''){
		    status = false;
		    $("#error-message").html("Please enter message");
		}else{		    
            	 $("#error-message").html("");
		}
        
		if(status == true){
		var FormData = $("#contact_form").serialize();
		$("#email_status").html('');
		$("#email_not_send").html('');
		$("#btn_submit").text("Sending Email...");
		$.ajax({
	            type: "POST",
	            data: FormData,
	            url: "sendmailAjax.php",
	            dataType: "JSON",
	            cache: false,
				success: function(resultData){
				console.log(resultData);
	          	if(resultData.admin_status == 'true'){
	           		$("#email_status").html('Mail has been send successfully !');
	           		$("#contact_form")[0].reset();
	           		window.location.href = resultData.url;
	           		$("#btn_submit").text("SEND NOW");
	          	}else{
	          		$("#email_not_send").html('Mail not send !');
	          	}
			},
			error: function(){} 	        
		});
		}
	});
});


///contact
	


