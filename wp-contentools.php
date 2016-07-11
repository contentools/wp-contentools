<?php
/*
Plugin Name: WP Contentools
Plugin URI: https://github.com/contentools/wp-contentools
Description: Contentools is a content marketing automation platform to centralize, streamline and manage content creation. This plugin enables the integration between the Contentools Platform and Wordpress.
Author: Contentools
Version: 1.0
Author URI: http://contentools.com/
License: GPLv2+
*/

remove_action( 'login_init', 'send_frame_options_header', 10, 0 );
remove_action( 'admin_init', 'send_frame_options_header', 10, 0 );

add_action( 'login_init', 'send_origin_frame_options_header', 10, 0 );
add_action( 'admin_init', 'send_origin_frame_options_header', 10, 0 );

function send_origin_frame_options_header() {
    $origin = 'http://go.contentools.com/';
    @header( 'X-Frame-Options: ' . $origin );
}
?>
