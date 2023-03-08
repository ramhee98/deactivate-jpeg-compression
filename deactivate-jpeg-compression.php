<?php
/**
* Plugin Name: Deactivate JPEG Compression
* Plugin URI: https://github.com/ramhee98/deactivate-jpeg-compression
* Description: This Plugin deactivates JPEG compression.
* Version: 1.0
* Author: ramhee
* Author URI: https://ramhee.ch/
* License: GPL-3.0
* License URI: https://github.com/ramhee98/deactivate-jpeg-compression/blob/main/LICENSE
*/

/***** this deactivates JPEG compression ;) *****/

add_filter('jpeg_quality', function($arg){return 100;}); add_filter( 'wp_editor_set_quality', function($arg){return 100;} );