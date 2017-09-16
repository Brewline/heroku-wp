<?php
function subscription_form( $atts, $content = null ) {
	return '<form id="sendgrid_mc_email_form__about" class="mc_email_form" action="#sendgrid_mc_email_subscribe" method="post">'.
		'<div><label class="sendgrid_mc_label sendgrid_mc_label_email" for="sendgrid_mc_email">Submit your email for early access:</label></div>'.
		'<div class="search-form"><input id="sendgrid_mc_email" class="search-field" name="sendgrid_mc_email" required="" type="text" value="" placeholder="phil@tecmo.com"><button type="submit" class="search-submit"><svg class="icon icon-search" aria-hidden="true" role="img"> <use href="#icon-search" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-envelope-o"></use> </svg><span class="screen-reader-text">Get Access</span></button></div>'.
	'</form>';
}
add_shortcode('subscription', 'subscription_form');
