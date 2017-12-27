<?php
/*
Template Name: Top Rate Extras
*/
?>

<?php
get_header();
?>

<h3 style="margin-bottom: -15px;">Not Always Right Hall of Fame - Extras</h3>

<div class="post_divider"></div>

<p style="font-size: 0.9em; margin-bottom: -15px;"><a href="#7days">7 Days</a> | <a href="#30days">30 Days</a> | <a href="#1year">1 Year</a> | <a href="#alltime">All Time</a></p>

<div class="post_divider"></div>


<b><a name="7days"></a>Last 7 Days:</b>
<?php if (function_exists('get_most_rated_range_category')): ?>
   <ul style="font-size: 0.9em;">
      <?php get_most_rated_range_category('7 days',557,'both',5,0,true); ?>
   </ul>
<?php endif; ?>

  <?php rewind_posts(); ?>


<b><a name="30days"></a>Last 30 Days:</b>
<?php if (function_exists('get_most_rated_range_category')): ?>
   <ul style="font-size: 0.9em;">
      <?php get_most_rated_range_category('30 days',557,'both',5,0,true); ?>
   </ul>
<?php endif; ?>

<b><a name="1year"></a>Last Year:</b>
<?php if (function_exists('get_most_rated_range_category')): ?>
   <ul style="font-size: 0.9em;">
      <?php get_most_rated_range_category('1 year',557,'both',5,0,true); ?>
   </ul>
<?php endif; ?>

<b><a name="alltime"></a>All Time:</b>
<?php if (function_exists('get_most_rated_category')): ?>
   <ul style="font-size: 0.9em;">
      <?php get_most_rated_category(557,'post',0,5); ?>
   </ul>
<?php endif; ?>

<?php get_footer(); ?>
