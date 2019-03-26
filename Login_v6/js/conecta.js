$(document).ready( function () {
	
	$("#inicio").on('click', function(event) {
		event.preventDefault();
		//alert("Ingresa a Java Script");
		hacerOperaciones();
	});	

	
	function hacerOperaciones(){
		var user_i = $("#user").val();
		//alert(user_e);
		var password_i = $("#pass").val();
		//alert(password_e);
		$.ajax({
        type: "POST",
        success : function(){
                window.location.href = "validauser.php?user_i="+user_i+"&password_i="+password_i;
        	}
    	});
	};
});	
