<?php
/*
Template Name: Top Rate 100
*/
?>

<style type="text/css"><!--
.thelist li {
     list-style-type: decimal !important;
}
--></style>

<h2>Not Always Right Hall of Fame</h2>

<b><a name="alltime"></a>Top 100 of All Time:</b>
<?php if (function_exists('get_most_rated')): ?>
   <ol class="thelist" style="font-size: 0.9em; list-style-type: decimal !important;">
      <?php get_most_rated('post',0,100); ?>
   </ol>
<?php endif; ?>
