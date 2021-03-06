<?php
/*
Plugin Name: Custom2Feed Content
Plugin URI: http://wordpress.org/support/topic/63420#post-356315
Description: Append post custom fields to syndication content.
Author: Kaf Oseo
Version: R1.1
Author URI: http://szub.net

	Copyright (c) 2006, 2008 Kaf Oseo (http://szub.net)
	Custom2Feed Content is released under the GNU General Public License, version 2 (GPL2)
	http://www.gnu.org/licenses/old-licenses/gpl-2.0.txt

	This is a WordPress plugin (http://wordpress.org).

~Changelog:
R1.1 (Feb-23-2008)
Fix to post_meta collect to work under newer WordPress versions.
*/

function szub_custom2feed($text) {
/* >> Begin user-configurable variables >> */

//  $pass_keys - Array of allowed custom keys. Modify to your needs.
	$pass_keys = array('job', 'location');

/*  $list_mode - How to display your custom keys/values. Options are:
	'ul'   : Unordered list.
	'ol-1' : Ordered (numbered) list (also: 'ol').
	'ol-A' : Ordered (lettered) list.
	'dl'   : Description list.
	'p'    : Individual paras (<p>customkey: customvalue</p>).
	'tag'  : Pseudo-tag format (<customkey>customvalue</customkey>).
*/
	$list_mode = 'p';

//  $sep - custom key:value separator character(s).
	$sep = ': ';

/* << End user-configurable variables << */

	$customtext = '';
	if( is_feed() ) {
		global $post_meta_cache, $wp_query;

		if( $post_meta_cache[$wp_query->post->ID] )
			$post_meta_cache = $post_meta_cache[$wp_query->post->ID];
		else
			$post_meta_cache = get_post_custom($wp_query->post->ID);

		if( $post_meta_cache ) {
			foreach( get_post_custom_keys() as $key ) {
				if( in_array($key, $pass_keys) ) {
					foreach( get_post_custom_values($key) as $value ) {
if ($key == "job") {$jobValue = $value;}
else if ($key == "location") {$locValue = $value;}
						$customtext .= szub_line_mode($key, $value, $sep, $list_mode); }
				}
			}

			if( $customtext ) {

				echo "<p>(<em>$jobValue</em> | <em>$locValue</em>)</p>";
				
			}
		}
	}

	return $text;
}

function szub_line_mode($key, $value, $sep, $list_mode) {

$key = ucwords($key);
	switch( $list_mode ) {
		case 'ul':
		case 'ol':
		case 'ol-1':
		case 'ol-A':
			return "<li>$key$sep$value</li>\n";
		case 'dl':
			return "<dt>$key$sep</dt><dd>$value</dd>\n";
		case 'tag':
			return "\n<$key>$value</$key>";
		default:
			if ($key == "Job") { return "<p>(<em>$value</em> | "; }
                        else if ($key == "Location") { return "<em>$value</em>)</p>"; }
	}
}

add_filter('the_content', 'szub_custom2feed', 9);
?>