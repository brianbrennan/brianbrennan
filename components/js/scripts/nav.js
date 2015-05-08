$(document).ready(function(){
	nav();

	$(document).scroll(function(){
		nav();
	});

});

function nav(){
	var scroll = $(document).scrollTop();
	var height = $('.hero').height();
	console.log(height);

	if(height > 0){

		if(scroll > height){
			$('header').removeClass('light');
		} else{
			$('header').addClass('light', 20000, "ease");
		}		
	}
	else{
		$('header').removeClass('light');
	}
}