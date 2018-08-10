( function($) { 

	$('.menu li').hover(
		function(){$(this).addClass("wpacc-hover");},
		function(){$(this).delay('250').removeClass("wpacc-hover");}
	);

	$('.menu li a').on('focus blur',
		function(){$(this).parents(".menu-item").toggleClass("wpacc-hover");}
	);

	}

	(jQuery)

);
