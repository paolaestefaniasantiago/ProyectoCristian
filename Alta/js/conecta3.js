$(document).ready( function () {
	$("button").on('click', function(event) {
		var id=this.id;
		var id_n=id.substring(1);
		$.ajax({
        type: "POST",
        success : function(){
                window.open("generapdf.php?id="+id_n);
        	}
    	});
	});	
	
	
	
});	
