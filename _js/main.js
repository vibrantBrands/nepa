$( document ).ready(function() {

	$('.menu-toggle').click(function(){
		$(this).toggleClass('active');
		$(this).toggleClass('inactive');
		$('.nav').toggleClass('active');
		$('.nav').toggleClass('inactive');
	});

	var load_bg = Math.floor((Math.random() * 5) + 1);

	switch(load_bg) {
		case 1:
		$('.homepage .hero').addClass('one');
		break;
		case 2:
		$('.homepage .hero').addClass('two');
		break;
		case 3:
		$('.homepage .hero').addClass('three');
		break;
		case 4:
		$('.homepage .hero').addClass('four');
		break;
		case 5:
		$('.homepage .hero').addClass('five');
		break;
	}

	$('.cta-box').click(function(){
		$('.login-box').toggleClass('show');
	});

});