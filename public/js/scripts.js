$(".nav ul li a").click(function(e){
	e.preventDefault();

	var target = $($(this).attr("href"));

	$("html, body").animate({ 
		scrollTop: target.offset().top - 120
	}, 1000);
});
/*!
* Start Bootstrap - Landing Page v6.0.4 (https://startbootstrap.com/theme/landing-page)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-landing-page/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project