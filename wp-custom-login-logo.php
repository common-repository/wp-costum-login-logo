<?php
/*
Plugin Name: WP Custom Login Logo
Plugin URI: http://antoniocampos.no-ip.com/2009/02/26/wordpress-login-form-image/
Description: Change the login screen logo.
Author: Antonio Campos
Version: 1.1
Author URI: http://antoniocampos.no-ip.com

 Copyright 2012  Antonio Campos  (email : jantoniofcampos@sapo.pt)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function login_css() {	
	echo '<style type="text/css">
	#login h1 a { background-image: url('.get_bloginfo('url').'/wp-content/plugins/wp-costum-login-logo/wp-custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'login_css');

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return '';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>