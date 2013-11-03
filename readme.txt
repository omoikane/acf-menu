=== Advanced Custom Fields: Menu Field ===
Contributors: danieledenobili
Tags: acf, menu
Requires at least: 3.4
Tested up to: 3.3.1
Stable tag: trunk
License: MIT
License URI: http://opensource.org/licenses/MIT

Adds a 'Menu' field type for the Advanced Custom Fields WordPress plugin.

= Compatibility =

This add-on will work with:

* version 4 and up
* version 3 and bellow

== Installation ==

This add-on can be treated as both a WP plugin and a theme include.

= Plugin =
1. Copy the 'acf-menu' folder into your plugins folder
2. Activate the plugin via the Plugins admin page

= Include =
1. Copy the 'acf-menu' folder into your theme folder (can use sub folders). You can place the folder anywhere inside the 'wp-content' directory
2. Edit your functions.php file and add the code below (Make sure the path is correct to include the acf-menu.php file)

`
include_once('acf-menu/acf-menu.php');
`

== Changelog ==

= 1.0.0 =
* Initial Release.
