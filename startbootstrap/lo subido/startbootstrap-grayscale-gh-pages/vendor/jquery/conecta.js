$(document).ready( function () {	
	$("btnIniciar").on('click', function(event) {
		var nombre=document.getElementById('nombre').value;
		
		$.ajax({
        type: "POST",
        success : function(){
                window.location.href = "validauser.php?nombre="+nombre;
		}
		});
	});
});	
