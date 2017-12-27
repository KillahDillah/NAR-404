<?php
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="post" id="post-<?php the_ID(); ?>">
	 <h3 class="storytitle" style="padding-bottom: 15px;"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

	 <div class="post_divider"></div>

	<div class="storycontent">
		<?php the_content(__('(more...)')); ?>
	</div>

	<div id="jobstyle"><?php edit_post_link(__('Edit This')); ?></div>

</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>