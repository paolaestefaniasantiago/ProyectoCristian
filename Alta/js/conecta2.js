$(document).ready( function () {
	$("button").on('click', function(event) {
		var id=this.id;
		
		if (id.indexOf("a") !=-1) 
		{
			var id=this.id;
		var id_n=id.substring(1);
		window.location.href = "ponencias.php?id="+id_n;
		}
		
		if (id.indexOf("p") !=-1) 
		{
			var id=this.id;
		var id_n=id.substring(1);
		window.location.href = "publicaciones.php?id="+id_n;
		}
		
		
		if (id.indexOf("b") !=-1) 
		{
			$.ajax({
			type: "POST",
			success : function(){
            window.location.href = "altaregistro.html";
        	}
			
			});
		}
		
		
		
		
		if (id.indexOf("e") !=-1) 
		{
			
		if (!confirm("Va a proceder a eliminar este registro, si desea eliminarlo de clic en ACEPTAR. De lo contrario de clic en CANCELAR.")) {
		return false;
		}
		else {
		var id=this.id;
		var id_n=id.substring(1);
		$.ajax({
        type: "POST",
        success : function(){
                window.location.href="eliminar.php?id="+id_n;
        	}
    	});
		
		
		}		
		
		}	
		
		
		if (id.indexOf("m") !=-1) 
		{
			var id=this.id;
		var id_n=id.substring(1);
		$.ajax({
        type: "POST",
        success : function(){
                window.location.href="modificar.php?id="+id_n;
        	}
    	});
		}
		
		
		if (id.indexOf("r") !=-1) 
		{
			var id=this.id;
		var id_n=id.substring(1);
		$.ajax({
        type: "POST",
        success : function(){
                window.open("generapdf.php?id="+id_n);
        	}
    	});
		}
		
		
		
	});	
	
	
	
	
	
	
	
});	
