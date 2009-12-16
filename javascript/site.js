jQuery(document).ready(function() {
	
	// Open external links in a new window/tab
	hostname = window.location.hostname
	jQuery("a[href^=http]")
		.not("a[href*='" + hostname + "']")
		.addClass('link external')
		.attr('target', '_blank');

});