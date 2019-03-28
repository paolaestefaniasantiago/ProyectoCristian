$(document).ready( function () {
	$("button").on('click', function(event) {
		var id=this.id;
		
		
		if (id.indexOf("b") !=-1) 
		{
			$.ajax({
        type: "POST",
        success : function(){
                window.location.href="index_registro.php";
        	}
    	});
			
		}
		
		if (id.indexOf("a") !=-1) 
		{
			idn=id.substring(1);
			$.ajax({
        type: "POST",
        success : function(){
                window.location.href="agregarpu.php?id="+idn;
        	}
    	});
		}
		
		if (id.indexOf("s") !=-1) 
		{
			var valor=document.getElementById('cbx_ponencia').value;
			idn=id.substring(1);
			$.ajax({
        type: "POST",
        success : function(){
                window.location.href="insertarpu.php?id="+idn+"&combo="+valor;
        	}
    	});
		}
		
		
		if (id.indexOf("e") !=-1) 
		{
		var id2=id;
		id2=id2.substring(1);
		id2='o'+id2;
		var valor=document.getElementById(id2).value;		
		if (!confirm("Va a proceder a eliminar este registro, si desea eliminarlo de clic en ACEPTAR. De lo contrario de clic en CANCELAR.")) {
		return false;
		}
		else {
		var id=this.id;
		var id_n=id.substring(1);
		$.ajax({
        type: "POST",
        success : function(){
                window.location.href="eliminarpu.php?id="+id_n+"&valor="+valor;
        	}
    	});
		}		
		
		}	
		
		
		
		
		
		
		
	});	
	
	
	
	
	
	
	
});	
