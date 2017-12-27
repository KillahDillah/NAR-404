<?php
/*
Template Name: Top Dashboard
*/
?>

<?php
get_header();
?>

<h3 style="margin-bottom: -15px;">Not Always Right Top Dashboard</h3>

<div class="post_divider" style="margin-bottom: 15px;"></div>

<b><a href="/dashboard">Dashboard</a> | <a href="/top250">Top 250 Stories</a></b>

<div class="post_divider"></div>

<?php if (function_exists('get_most_rated_range')): ?>
	<b>Top 10 posts of last week:</b>
	<ol style="font-size: 0.9em;">
		<?php get_most_rated_range('7 days','post',10); ?>
	</ol>
	<b>Top 10 posts of the last 30 days:</b>
	<ol style="font-size: 0.9em;">
		<?php get_most_rated_range('30 days','post',10); ?>
	</ol>
	<b>Top 30 posts of the last 365 days:</b>
	<ol style="font-size: 0.9em;">
		<?php get_most_rated_range('1 year','post',30); ?>
	</ol>
<?php endif; ?>

<b>Last 3 Lists:</b>
<?php
$the_query = new WP_Query( array( 'category_name' => 'lists', 'posts_per_page' => 3 ) ); 
// The Loop
if ( $the_query->have_posts() ) {
	$string .= '<ol style="font-size: 0.9em;">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
		}
} else { /* no posts found */ }
$string .= '</ol>';
echo $string;
$string = "";
/* Restore original Post Data */
wp_reset_postdata();
?>

<b>Last 3 Comics:</b>
<?php
$the_query = new WP_Query( array( 'category_name' => 'comics', 'posts_per_page' => 3 ) ); 
// The Loop
if ( $the_query->have_posts() ) {
	$string .= '<ol style="font-size: 0.9em;">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
		}
} else { /* no posts found */ }
$string .= '</ol>';
echo $string;
$string = "";
/* Restore original Post Data */
wp_reset_postdata();
?>

<b>Last 3 Macros:</b>
<?php
$the_query = new WP_Query( array( 'category_name' => 'macros', 'posts_per_page' => 3 ) ); 
// The Loop
if ( $the_query->have_posts() ) {
	$string .= '<ol style="font-size: 0.9em;">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
		}
} else { /* no posts found */ }
$string .= '</ol>';
echo $string;
$string = "";
/* Restore original Post Data */
wp_reset_postdata();
?>

<b>Last 3 Trigger Stories:</b>
<?php
$the_query = new WP_Query( array( 'category_name' => 'trigger story', 'posts_per_page' => 3 ) ); 
// The Loop
if ( $the_query->have_posts() ) {
	$string .= '<ol style="font-size: 0.9em;">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
		}
} else { /* no posts found */ }
$string .= '</ol>';
echo $string;
$string = "";
/* Restore original Post Data */
wp_reset_postdata();
?>

<?php get_footer(); ?>
