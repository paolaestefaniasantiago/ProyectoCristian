$(document).ready( function () {
	$("button").on('click', function(event) {
		$.ajax({
        type: "POST",
        success : function(){
                window.location.href="index_registro.php";
        	}
    	});
	});	
	
	
	
});	
