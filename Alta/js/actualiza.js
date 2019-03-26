$(document).ready( function () {
	$("button").on('click', function(event) {
		var nombre=document.getElementById('nombre').value;
		var email=document.getElementById('mail').value;
		var estado=document.getElementById('estado').value;
		var institucion=document.getElementById('institucion').value;
		var id=document.getElementById('id').value;
		var semilla=document.getElementById('semilla').value;

		$.ajax({
        type: "POST",
        success : function(){
                window.location.href="actualizareg.php?nombre="+nombre+"&email="+email+"&estado="+estado+"&id="+id+"&semilla="+semilla+"&institucion="+institucion;
        	}
    	});
			
		
	});	
	
	
	
});	
