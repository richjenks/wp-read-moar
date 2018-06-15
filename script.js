// jQuery('#continue').hide();

jQuery('[href="#continue"]').on('click', function() {
	jQuery(this).slideUp();
	jQuery('#continue').slideDown();
});