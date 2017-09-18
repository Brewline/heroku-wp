<?php
function subscription_form( $attrs, $content = null ) {
	extract( shortcode_atts( array(
		'msg' => 'Submit your email for early access',
		'list' => 'general'
	), $attrs, 'subscription' ) );

	$form_html = '<form id="sendgrid_mc_email_form__about" class="mc_email_form" action="#sendgrid_mc_email_subscribe" method="post">'.
		'<input name="sendgrid_mc_user_type" type="hidden" value="%2$s">'.
		'<div><label class="sendgrid_mc_label sendgrid_mc_label_email" for="sendgrid_mc_email">%1$s:</label></div>'.
		'<div class="search-form"><input id="sendgrid_mc_email" class="search-field" name="sendgrid_mc_email" required="" type="text" value="" placeholder="phil@tecmo.com"><button type="submit" class="search-submit"><svg class="icon icon-search" aria-hidden="true" role="img"> <use href="#icon-search" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-envelope-o"></use> </svg><span class="screen-reader-text">Get Access</span></button></div>'.
	'</form>';

	return do_shortcode( sprintf(
		$form_html,
		esc_html( $msg ),
		esc_html( $list )
	) );
}
add_shortcode('subscription', 'subscription_form');

function call_to_action( $attrs, $content = null ) {
	extract( shortcode_atts( array(
		'href' => '/'
	), $attrs, 'cta' ) );

	return do_shortcode( sprintf(
		'<a class="call-to-action" href="%1$s">%2$s</a>',
		esc_url($href),
		do_shortcode($content)
	) );
}
add_shortcode('cta', 'call_to_action');
