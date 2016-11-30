$(document).click(function (){
	$("#modalButtonDC").click(function(){
        $('#modal').modal('show')
		.find('#modalContent')
		.load($(this).attr('value'));
    });
	
	$("#modalButtonDS").click(function(){
        $('#modal').modal('show')
		.find('#modalContent')
		.load($(this).attr('value'));
    });
	
	$("#modalButtonDR").click(function(){
        $('#modal').modal('show')
		.find('#modalContent')
		.load($(this).attr('value'));
    });
});