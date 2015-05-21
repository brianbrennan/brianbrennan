$(document).ready(function(){
	$('#contact > div > input').on('focus',function(){
		$(this).prev().children().css('color','#FF5B71')
	});

	$('#contact > div > input').focusout(function(){
		$(this).prev().children().css('color','#313131')
	});

	$('#contact > .email > div > input').on('focus',function(){
		$(this).prev().children().css('color','#FF5B71')
	});

	$('#contact > .email > div > input').focusout(function(){
		$(this).prev().children().css('color','#313131')
	});

	$('#contact > textarea').on('focus',function(){
		$(this).prev().children().css('color','#FF5B71')
	});

	$('#contact > textarea').focusout(function(){
		$(this).prev().children().css('color','#313131')
	});
});