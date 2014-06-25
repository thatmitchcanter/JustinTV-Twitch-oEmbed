<?php
/**
 * @package Justin_Twitch
 */
/*
Plugin Name: JustinTV / Twitch oEmbed
Plugin URI: https://github.com/studionashvegas/Justin-Twitch-oEmbed
Description: Allows you to seamlessly embed JustinTV / Twitch videos with only a link.  Uses the embed.ly API.
Version: 1
Author: Mitch Canter
Author URI: http://www.studionashvegas.com
License: GPLv2 or later
*/

// Add JustinTV / Twitch via embed.ly API
function add_oembed_justin_twitch(){
	wp_oembed_add_provider( 'http://*twitch.tv/*', 'http://api.embed.ly/v1/api/oembed');
	wp_oembed_add_provider( 'http://*twitch.tv/*/b/*', 'http://api.embed.ly/v1/api/oembed');
	wp_oembed_add_provider( 'http://*justin.tv/*/w/*', 'http://api.embed.ly/v1/api/oembed');
	wp_oembed_add_provider( 'http://*justin.tv/*/b/*', 'http://api.embed.ly/v1/api/oembed');
}

add_action('init','add_oembed_justin_twitch');

?>