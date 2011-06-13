<?php

require_once( 'admin-menu.php' );
require_once( 'wp-fb-admin-class.php' );
add_action( 'fb_merge_submenu', 'wp_fb_comments_admin_func' );
function wp_fb_comments_admin_func()
{
	new wp_fb_comments_admin();
}
