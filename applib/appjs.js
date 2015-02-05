$(document).ready(function(){
	$("#divchange").click(function(){
		var width = $("#divxchange").position();
		alert(width.left + " " + width.top);
		
	});
	
});