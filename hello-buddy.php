<?php
/**
 * Plugin Name: Hello Buddy
 * Version: 1.0.0
 * Description: This plugin adds your favour words at the front of the content
 * Author: Felix Chen
 * Author URI: https://felix.reainc.net
 * Plugin URI: https://github.com/cxhlyj/hello-buddy
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0
 */
/*Use this function to add a single word*/
function add_prelude( $text ) {
	$text = "Hello buddy," . $text;
	return $text;
}
add_filter( 'the_content', 'add_prelude' );
?>