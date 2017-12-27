<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

  <!-- <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main"> -->
      <div class="post" id="post-<?php the_ID(); ?>">
      <!-- <div class="page-header"> -->
        <h1 class="storytitle"><?php _e('404 - File not found'); ?></h1>
      <!-- </header> -->

      <!-- <div class="page-wrapper"> -->
        <div class="post_header">
          <p><?php _e( 'This is somewhat embarrassing, isn’t it?'); ?></p>
        </div>
        <div class="storycontent">
          
          <p><?php _e( 'This is quite unexpected, there\'s nothing here!  Try searching a keyword?'); ?></p>

          <?php get_search_form(); ?>
        </div><!-- .page-content -->
      <!-- </div> --><!-- .page-wrapper -->

    </div><!-- #content -->
  <!-- </div> --><!-- #primary -->

<?php get_footer(); ?>
