$(document).ready( function () {
	$("button").on('click', function(event) {
		var nombre=document.getElementById('nombre').value;
		var email=document.getElementById('mail').value;
		var cuidad=document.getElementById('ciudad').value;
		var institucion=document.getElementById('institucion').value;

		$.ajax({
        type: "POST",
        success : function(){
                window.location.href="altareg.php?nombre="+nombre+"&email="+email+"&cuidad="+cuidad+"&institucion="+institucion;
        	}
    	});
			
		
	});	
	
	
	
});	
