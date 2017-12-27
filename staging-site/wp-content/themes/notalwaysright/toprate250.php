<?php
/*
Template Name: Top Rate 250
*/
?>

<?php
get_header();
?>

<h3 style="margin-bottom: -15px;">Not Always Right Hall of Fame - 250</h3>

<div class="post_divider" style="margin-bottom: 15px;"></div>

<b><a href="/dashboard">Dashboard</a> | <a href="/top-250">Top 250 Stories</a></b>

<div class="post_divider"></div>

<b><a name="alltime"></a>Top 250 of All Time:</b>
<?php if (function_exists('get_most_rated')): ?>
   <ol style="font-size: 0.9em;">
      <?php get_most_rated('post',0,250); ?>
   </ol>
<?php endif; ?>

<?php get_footer(); ?>
