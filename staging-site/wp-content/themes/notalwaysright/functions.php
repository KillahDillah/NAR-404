<?php
//change WordPress permalink
function cws_nice_search_redirect() {
	global $wp_rewrite;
	if ( !isset( $wp_rewrite ) || !is_object( $wp_rewrite ) || !$wp_rewrite->using_permalinks() )
		return;
	$search_base = $wp_rewrite->search_base;
	if ( is_search() && !is_admin() && strpos( $_SERVER['REQUEST_URI'], "/{$search_base}/" ) === false ) {
		wp_redirect( home_url( "/{$search_base}/" . urlencode( get_query_var( 's' ) ) ) );
		exit();
	}
}

add_action( 'widgets_init', 'child_register_sidebar' ); 
// Leah
function child_register_sidebar(){
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'class' => 'leah',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ));
}

add_action( 'template_redirect', 'cws_nice_search_redirect' );
if ( function_exists('register_sidebar') )
	register_sidebar(array(
 'before_widget' => '<li id="%1$s" class="widget %2$s">',
 'after_widget' => '</li>',
 'before_title' => '',
 'after_title' => '',
 ));
add_theme_support( 'post-thumbnails' ); 
function dropdown_tag_cloud( $args = '' ) {
	$defaults = array(
		'smallest' => 8, 'largest' => 22, 'unit' => 'pt', 'number' => 45,
		'format' => 'flat', 'orderby' => 'name', 'order' => 'ASC',
		'exclude' => '', 'include' => ''
	);
	$args = wp_parse_args( $args, $defaults );
	$tags = get_tags( array_merge($args, array('orderby' => 'count', 'order' => 'DESC')) ); // Always query top tags
	if ( empty($tags) )
		return;
	$return = dropdown_generate_tag_cloud( $tags, $args ); // Here's where those top tags get sorted according to $args
	if ( is_wp_error( $return ) )
		return false;
	else
		echo apply_filters( 'dropdown_tag_cloud', $return, $args );
}
// $tags = prefetched tag array ( get_tags() )
// $args['format'] = 'flat' => whitespace separated, 'list' => UL, 'array' => array()
// $args['orderby'] = 'name', 'count'
function dropdown_generate_tag_cloud( $tags, $args = '' ) {
	global $wp_rewrite;
	$defaults = array(
		'smallest' => 8, 'largest' => 22, 'unit' => 'pt', 'number' => 45,
		'format' => 'flat', 'orderby' => 'name', 'order' => 'ASC'
	);
	$args = wp_parse_args( $args, $defaults );
	extract($args);
	if ( !$tags )
		return;
	$counts = $tag_links = array();
	foreach ( (array) $tags as $tag ) {
		$counts[$tag->name] = $tag->count;
		$tag_links[$tag->name] = get_tag_link( $tag->term_id );
		if ( is_wp_error( $tag_links[$tag->name] ) )
			return $tag_links[$tag->name];
		$tag_ids[$tag->name] = $tag->term_id;
	}
	$min_count = min($counts);
	$spread = max($counts) - $min_count;
	if ( $spread <= 0 )
		$spread = 1;
	$font_spread = $largest - $smallest;
	if ( $font_spread <= 0 )
		$font_spread = 1;
	$font_step = $font_spread / $spread;
	// SQL cannot save you; this is a second (potentially different) sort on a subset of data.
	if ( 'name' == $orderby )
		uksort($counts, 'strnatcasecmp');
	else
		asort($counts);
	if ( 'DESC' == $order )
		$counts = array_reverse( $counts, true );
	$a = array();
	$rel = ( is_object($wp_rewrite) && $wp_rewrite->using_permalinks() ) ? ' rel="tag"' : '';
	foreach ( $counts as $tag => $count ) {
		$tag_id = $tag_ids[$tag];
		$tag_link = clean_url($tag_links[$tag]);
		$tag = str_replace(' ', '&nbsp;', wp_specialchars( $tag ));
		$a[] = "\t<option value='$tag_link'>$tag</option>";
	}
	switch ( $format ) :
	case 'array' :
		$return =& $a;
		break;
	case 'list' :
		$return = "<ul class='wp-tag-cloud'>\n\t<li>";
		$return .= join("</li>\n\t<li>", $a);
		$return .= "</li>\n</ul>\n";
		break;
	default :
		$return = join("\n", $a);
		break;
	endswitch;
	return apply_filters( 'dropdown_generate_tag_cloud', $return, $tags, $args );
}
function list_tag_cloud( $args = '' ) {
 $defaults = array(
 'smallest' => 8, 'largest' => 22, 'unit' => 'pt', 'number' => 45,
 'format' => 'flat', 'orderby' => 'name', 'order' => 'ASC',
 'exclude' => '', 'include' => ''
 );
 $args = wp_parse_args( $args, $defaults );
 $tags = get_tags( array_merge($args, array('orderby' => 'count', 'order' => 'DESC')) ); // Always query top tags
 if ( empty($tags) )
 return;
 $return = list_generate_tag_cloud( $tags, $args ); // Here's where those top tags get sorted according to $args
 if ( is_wp_error( $return ) )
 return false;
 else
 echo apply_filters( 'dropdown_tag_cloud', $return, $args );
}
// $tags = prefetched tag array ( get_tags() )
// $args['format'] = 'flat' => whitespace separated, 'list' => UL, 'array' => array()
// $args['orderby'] = 'name', 'count'
function list_generate_tag_cloud( $tags, $args = '' ) {
 global $wp_rewrite;
 $defaults = array(
 'smallest' => 8, 'largest' => 22, 'unit' => 'pt', 'number' => 45,
 'format' => 'flat', 'orderby' => 'name', 'order' => 'ASC'
 );
 $args = wp_parse_args( $args, $defaults );
 extract($args);
 if ( !$tags )
 return;
 $counts = $tag_links = array();
 foreach ( (array) $tags as $tag ) {
 $counts[$tag->name] = $tag->count;
 $tag_links[$tag->name] = get_tag_link( $tag->term_id );
 if ( is_wp_error( $tag_links[$tag->name] ) )
 return $tag_links[$tag->name];
 $tag_ids[$tag->name] = $tag->term_id;
 }
 $min_count = min($counts);
 $spread = max($counts) - $min_count;
 if ( $spread <= 0 )
 $spread = 1;
 $font_spread = $largest - $smallest;
 if ( $font_spread <= 0 )
 $font_spread = 1;
 $font_step = $font_spread / $spread;
 // SQL cannot save you; this is a second (potentially different) sort on a subset of data.
 if ( 'name' == $orderby )
 uksort($counts, 'strnatcasecmp');
 else
 asort($counts);
 if ( 'DESC' == $order )
 $counts = array_reverse( $counts, true );
 $a = array();
 $rel = ( is_object($wp_rewrite) && $wp_rewrite->using_permalinks() ) ? ' rel="tag"' : '';
 foreach ( $counts as $tag => $count ) {
 $tag_id = $tag_ids[$tag];
 $tag_link = clean_url($tag_links[$tag]);
 $tag = str_replace(' ', '&nbsp;', wp_specialchars( $tag ));
 $a[] = "\t<li><a href='$tag_link'>$tag</a></li>";
 }
 switch ( $format ) :
 case 'array' :
 $return =& $a;
 break;
 case 'list' :
 $return = "<ul class='wp-tag-cloud'>\n\t<li>";
 $return .= join("</li>\n\t<li>", $a);
 $return .= "</li>\n</ul>\n";
 break;
 default :
 $return = join("\n", $a);
 break;
 endswitch;
 return apply_filters( 'dropdown_generate_tag_cloud', $return, $tags, $args );
}
function mam_ddpaginate($jumptext=' Jump To: ') {
 /* Function to provide a dropdown to jump to other pages.
 Use in conjunction with previous/next_posts_link for navigation.
 Author: Mac McDonald
 Contact: Use the About->Contact Us form at BluegrassMiataClub =dot= com
 Sample Usage:
 <div class="navigation">
 <div class='alignleft'>
 <?php next_posts_link('&laquo; Older Entries') ?>&nbsp;&nbsp;&nbsp;
 <?php previous_posts_link('Newer Entries &raquo;') ?>&nbsp;&nbsp;&nbsp;
 <?php echo mam_ddpaginate(); 
 echo '<br /><div class="alignleft">';
 echo mam_pagesummary(); ?></div>
 </div>
 </div>
 */
 global $wp_query,$wp_rewrite;
	$numofpages = $wp_query->max_num_pages;
 //echo "<p>NUMOFPAGES:$numofpages</p>";
 if ($numofpages > 1) {
 //echo '<p>wp_query:';print_r($wp_query);echo '</p>';
 //echo '<p>permalink_structure:';print_r(get_option('permalink_structure'));echo '</p>';
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 $currpage = $_SERVER['REQUEST_URI'];
 if (!$_SERVER['QUERY_STRING']) $currpage = trailingslashit($currpage);
 //echo "<p>CURRPAGE BEFORE:$currpage</p>";
 // We want to reformat currpage so paged= is at the end of the string,
 // and relocate any other parameters as necessary.
 // Are we using pretty permalinks?
 $pretty = ($wp_rewrite && $wp_rewrite->using_permalinks()) ? TRUE : FALSE;
 if (!$pretty) {
 if (preg_match('/([?&])paged=\d+(\&)?/',$currpage,$matches)) {
 //echo "<p>MATCHES:";print_r($matches);echo "</p>";
 if ($matches[1] == '?') {
 if ($matches[2] == '&') {
 // paged is first, followed by other params
 $currpage = preg_replace('/\?paged=\d+\&/','?',$currpage);
 $currpage .= '&paged=';
 } else { // ?paged= is alone
 $currpage = preg_replace('/\?paged=\d+/','',$currpage);
 $currpage .= '?paged=';
 }
 } else { // &paged=n is not first
 $currpage = preg_replace('/&paged=\d+/','',$currpage);
 $currpage .= '&paged=';
 }
 } else { // There is no paged=n parameter
 // If query_string exists, use &paged=, else use ?paged= .
 if ($_SERVER['QUERY_STRING']) {
 $currpage .= '&paged=';
 } else {
 $currpage .= '?paged=';
 }
 }
 } else { // Using pretty permalinks
 // If there is no /page/n/, add page/1/ to $currpage.
 if (!preg_match('#/page/\d+#',$currpage)){
 if (strpos($currpage,'/?')) {
 $currpage = preg_replace('#/\?#','/page/1/?',$currpage);
 } else {
 $currpage .= 'page/1/';
 }
 }
 }
 //echo "<p>CURRPAGE AFTER:$currpage</p>";
 $pagelinks = "$jumptext <select onchange='location.href=options[selectedIndex].value'>";
 for($i = 1; $i <= $numofpages; $i++){
 $pagelinks .= "<option value='";
 if ($pretty) {
 $thispage = preg_replace('#/page/\d+#',"/page/$i",$currpage);
 } else {
 $thispage = "$currpage$i";
 }
 $pagelinks .= "$thispage'";
 if ($i == $paged) {
 $pagelinks .= ' selected';
 }
 $pagelinks .= ">&nbsp;$i&nbsp;</option>";
 }
 $pagelinks .= '</select>';
 }
 //echo '<p>PAGELINKS:'; echo htmlspecialchars($pagelinks); echo '</p>';
 return $pagelinks;
 }
function mam_pagesummary() {
 global $wp_query;
 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 $numofpages = $wp_query->max_num_pages;
 $pagesummary = "($paged of $numofpages)";
 return $pagesummary;
}
remove_action('loop_start', 'get_comment_authors_ratings');
//CUSTOM SION - Added FB IA RSS theme 4/11 
add_action('after_setup_theme', 'customRSS');
function customRSS(){
        add_feed('fbnar', 'customRSSFunc');
}
function customRSSFunc(){
        get_template_part('rss', 'fbnar');
}

//CUSTOM SION Knowledge Base plugin styles 8/12/17
wp_enqueue_style( 'hkb-style', 'https://cdn.notalwaysright.com/wp-content/plugins/ht-knowledge-base/css/hkb-style.css' );

?>