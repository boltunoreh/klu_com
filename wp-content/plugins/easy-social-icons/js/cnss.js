jQuery(document).ready(function($) {
	jQuery('table.cnss-social-icon tr td img').hover(function() {
		jQuery(this).animate({
			opacity: 0.5
			//marginTop:'-5px'
		  }, 200 );
	},
	function() {
		jQuery(this).animate({
			opacity: 1
			//marginTop:'0px'
		  }, 200 );
	});
});