=== WPINC Prototype ===
Author: Patrick Jackson
Tags: Prototype, Scriptaculous
Tested on: 2.7.1

Installs the Prototype and Scriptaculous JavaScript libraries included with WordPress.

== Description ==

Both Prototype and Scriptaculous are installed in the /wp-includes/scriptaculous directory. This plug-in simply pulls them into your blog header. That's it! Pretty simple.

== Installation ==

1. Upload `wpinc-prototype.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

The only thing you need to do, is make sure you load your dependent JavaScript files after the <?php wp_head(); ?> function callÅ in the header.php file.
