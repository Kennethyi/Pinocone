$(window).on('load', function() {
	$('.preloader').delay(500).fadeOut('slow');
	$('.preloader-wrapper').delay(500).fadeOut();
	document.getElementById("wrapper").style.display = "block";
});