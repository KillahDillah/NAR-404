<?php
/*Template Name: About*/
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <div class="post" id="post-<?php the_ID(); ?>">
    <div class="aboutcontent">
      <div class="hots">
        <?php the_content(__('(more...)')); ?>
      </div>
    </div> 
  </div>
        
<?php endwhile; else: ?>
<?php get_page('404.php'); ?>
<?php endif; ?>

<?php get_footer(); ?>

