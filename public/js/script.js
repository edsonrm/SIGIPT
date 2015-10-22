$("#registro").click(function(){
	var dato = $("#genre").val();
	var route = "/tipo";
	var token = $("#token").val();	
	$.ajax({
		url: "route",
		headers: {"X-CSRF-TOKEN": token},
		type: "POST",
		dataType: "json",
		data: {genre: dato}
	});
});	