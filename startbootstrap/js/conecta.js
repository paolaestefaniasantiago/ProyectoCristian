$(document).ready( function () {
	$("#btnAdd").on('click', function(event) {
		event.preventDefault();
		// alert("Ingresa a Java Script");
		hacerOperaciones();
	});	
	
	function hacerOperaciones(){
		var primero = $("#primero").val();
		var segundo = $("#segundo").val();
		$.ajax({
        type: "POST",
        url: "oper.php" ,
        success : function(){
                window.location.href = "oper.php?primero="+primero+"&segundo="+segundo;
        	}
    	});
	};
});	
