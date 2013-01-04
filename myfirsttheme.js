// Execute jQuery functions only after jQuery JS has loaded
$(function() {
	
	$('.alert').delay(3000).fadeOut(3000);
	
	$('#primary-nav').attr('data-spy','affix')
	$('#primary-nav').attr('data-offset-top','220')
	
//	$('#main .row .span9').click(function(){
//		$(this).addClass('highlight');
//	});
	
	// Capture hover over sidebar
//	$('#main .row .span4').hover (
//		function(){
//		$(this).addClass('highlight');
//		}
//		function(){
//			$(this).removeClass('highlight');
		}
	);
//Capture double-click of post paragraphs
	$('.post p').dblclick(function(){
		$(this).addClass('deleting');
		$(this).addClass(1000);
	});
	// Listen for keyup events
	$(document) .keyup(function(e) {
		switch(e.which) {
		case 39: //Right arrow
			window.location = 'http://google.com';
			break;
		case 20: //caps lock
			$('input[names=s]').val('');
			break;
		case 27: //Escape key
			$('#main').slideUp();
			break;
			cas 76: //L key
				// Get the url for wp-admin
				var url = $('footer a.login').attr('href');
				window.location = url;
				break;
	}
});