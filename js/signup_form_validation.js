$(function(){
	var username= $('#username');
	var error= $('#error_message');
	var password= $('#password');
	var confirm_password= $('#confirm_password');
	var password_error= $('#password_error');
	var form= $('#signup_form');
	var email= $('#email');

	function validatedcommSeptEmail(commSeptEmail){
		var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$/;
        return (regex.test(commSeptEmail)) ? true : false;
	}

	username.blur(function(){
		var send_data= $(this).val();
		$.ajax({
			url: 'username_process_data_ajax.php',
			method: 'POST',
			data: {data_key:send_data},
			dataType:'text',
			success: function(data){
				error.html(data);
				if (error.text()) {
					username.focus();
				}
			}
		});
	});



	confirm_password.focus(function(){
		if (error.text()) {
			error.fadeOut('slow');
		}
	});



	form.submit(function(e){
        if (password.val() != confirm_password.val()) {
            password_error.html('YOUR PASSWORD MUST MATCH');
            e.preventDefault();
        }

		if (!validatedcommSeptEmail(email.val())) {
			error.html('INCORRECT EMAIL FORMAT');
			error.preventDefault();
		}
	});
	
});