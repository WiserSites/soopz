$(document).ready(function(){

		
	$('#btn-open').click(function(){	
		
		$.basicpopup({
			content: $('#popup-content').html()
		});
		
	});

});