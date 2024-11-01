<?php

/*
Plugin Name: WPINC Prototype
Plugin URI: http://www.solidhex.com/2009/06/05/wpinc-prototype-wordpress-plug-in
Description: Installs the Prototype and Scriptaculous JavaScript libraries included with WordPress.
Version: 1.0
Author: Patrick Jackson
Author URI: http://www.solidhex.com
*/

function wpinc_prototype()
{
	$path_prototype = get_option('home') . '/' . WPINC . '/js/scriptaculous/prototype.js';
	$path_scriptaculous = get_option('home') . '/' . WPINC . '/js/scriptaculous/scriptaculous.js';
?>

<script src="<?php echo $path_prototype; ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $path_scriptaculous; ?>" type="text/javascript" charset="utf-8"></script>

<?php 

}

add_action('wp_head', 'wpinc_prototype');

?>