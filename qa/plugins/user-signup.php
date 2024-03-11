<?php
/**
 * File: user-signup.php
 *
 * Store new user info in "wp-content/mail.txt" when testing user signup.
 *
 * @package W3TC
 * @subpackage QA
 *
 * phpcs:disable WordPress.WP.AlternativeFunctions
 */

add_filter(
	'wp_mail',
	function ( $message ) {
		$f = fopen( WP_CONTENT_DIR . '/mail.txt', 'w+' );
		fwrite( $f, $message['message'] );
		fclose( $f );
	},
	99
);

// WordPress bug: wp-activate.php causes Theme without header.php is <strong>deprecated</strong> since version 3.0.0 with no alternative available. Please include a header.php template in your theme. in /var/www/wp-sandbox/wp-includes/functions.php on line 5516
add_filter( 'deprecated_file_trigger_error',
	function() {
		return false;
	}
);
