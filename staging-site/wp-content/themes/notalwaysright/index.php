<?php get_header(); ?>

<?php if (is_month()) { wp_reset_query(); ?>
<div id="announcestory">
<h2 class="pagetitle" style="display: inline; padding-right: 10px;">Archive for <?php the_time('F, Y'); ?></h2> <?php echo mam_ddpaginate('Jump to page:'); ?>
</div>
<?php } elseif (is_year()) { wp_reset_query(); ?>
<div id="announcestory">
<h2 class="pagetitle" style="display: inline; padding-right: 10px;">Archive for <?php the_time('Y'); ?></h2> <?php echo mam_ddpaginate('Jump to page:'); ?>
</div>
<?php } ?>


<?php $countVar = 1; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="post" id="post-<?php the_ID(); ?>">

	<!-- CUSTOM 3/7/2016 Updated post title + post header -->
	<!— POST TITLE —>
	<h1 class="storytitle">
		<a href="<?php the_permalink() ?>" rel="bookmark"><?php if (in_category('Unfiltered')) { echo "Unfiltered Story #"; the_ID(); } else { the_title(); } ?></a> 
		<?php edit_post_link(__('[ EDIT ]')); ?>
	</h1>

	<!— POST HEADER —>
	<div class="post_header">

	<!— Post Tags + Location 5/18/17 —>
	<?php 
		if (has_tag()) { the_tags('',', '); echo " | "; }  
		if (get_post_custom_values('Location')) { 
			foreach(get_post_custom_values('Location') as $locationVar) { 
				echo $locationVar; echo " | "; 
			} 
		} 
		else if (get_post_custom_values('location')) { 
			foreach(get_post_custom_values('location') as $locationVar) { 
				echo $locationVar; echo " | "; 
			} 
		} 
	?>

	<!-- 2017 Site Merger 5/18/17 Post Category Background Colors //-->
	<?php
		$categories = get_the_category();
		$separator = ' ';
		$output = '';
		if ( ! empty( $categories ) ) {
    			foreach( $categories as $category ) {
        		$output .= '<a class="postheadercat" id="postheadercat_'.$category->name.'" href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    			echo trim( $output, $separator );
		}
	?>
	<?php echo " | "; the_time('F j, Y');  ?>
	</div>

	<div class="storycontent">
	
	<!-- Auto-Display Featured Image for stories in Comics, Macros, and Lists -->
	<!-- CUSTOM 5/18/17 - Updated logic -->
	<?php 
	if ( (has_tag('comics')) || (has_tag('macros')) )  {
		if ( has_post_thumbnail() ) 
		{ 
			the_post_thumbnail(); 
		}
	} else if (has_tag('lists')) {
		if ( has_post_thumbnail() ) 
		{ 
			the_post_thumbnail( 'full', array( 'class' => 'listiclefeatured' )); 
		}
	} ?>

	<!-- Auto-Display Roundups Image 5/18/17 -->
	<?php 
	if ( has_tag('roundups') ) { 
		if ( has_post_thumbnail() ) 
		{ 
			echo "<div id='roundupsimage'>";
			the_post_thumbnail(); 
			echo "</div>";
		}
	} ?>

		<?php the_content(__('(more...)')); ?>
</div>

	<!-- CUSTOM -->
	<div id="meta_container">
		<div id="meta_vote"><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
		<div id="meta_share">
			<div class="meta_share_icon"><a class="social-share" href="http://www.facebook.com/share.php?u=<?php the_permalink();?>&title=<?php if (in_category('Unfiltered')) { echo "Unfiltered Story "; the_ID(); } else { the_title(); } ?>" target="_blank"><img src="/wp-content/themes/notalwaysright/images/share_fb.png" alt="Share on Facebook" /></a></div>	
			<div class="meta_share_icon"><a class="social-share" href="https://twitter.com/intent/tweet?text=<?php if (in_category('Unfiltered')) { echo "Unfiltered Story "; the_ID(); } else { the_title(); } ?>&url=<?php the_permalink();?>&via=notalwaysright.com"><img src="/wp-content/themes/notalwaysright/images/share_twitter.png" alt="Share on Twitter" /></a></div>
			<div class="meta_share_icon"><a class="social-share" href="https://www.reddit.com/submit?url=<?php the_permalink();?>&title=<?php if (in_category('Unfiltered')) { echo "Unfiltered Story "; the_ID(); } else { the_title(); } ?>"><img src="/wp-content/themes/notalwaysright/images/share_reddit.png" alt="Share on Reddit" /></a></div>
		</div>
<div id="meta_comments_wrapper">
<div id="meta_comments_icon" style="float: left;">
<a href="<?php echo get_permalink($post->ID); ?>"><img src="//notalwaysright.com/wp-content/themes/notalwaysright/images/comment.gif" />
</a>
</div>
<div id="meta_comments">
<a href="<?php echo get_permalink($post->ID); ?>">
<div class="comments_count">
<div class="disqus-comment-count" data-disqus-url="<?php echo get_permalink($post->ID); ?>#disqus_thread">0
</div>
<span class="comments_text">COMMENTS
</span>
</div>
</a>
</div>
		</div>
	</div>
</div>

<div style="clear: both;"></div>

<div class="post_divider"></div>

<?php 
   if ($countVar == 1) { ?>

	<div class="ad_mobile_incontent">
	<div style="text-align:center!important;">
			<?php if (function_exists ('adinserter')) echo adinserter (6); ?></div>
		<div class="post_divider"></div>
	</div>

<?php   } 
else if ($countVar == 2) { ?>

	<div class="ad_mobile_incontent">
		<div style="text-align:center!important;">
			<?php if (function_exists ('adinserter')) echo adinserter (7); ?></div>
		<div class="post_divider"></div>
	</div>

<?php   } 
else if ($countVar == 3) { ?>

	<!-- CUSTOM 9/14/16 Add Mobile Feed C -->
	<div class="ad_mobile_incontent">
	<div style="text-align:center!important;">
			<?php if (function_exists ('adinserter')) echo adinserter (14); ?></div>

		<div class="post_divider"></div>
	</div>

<?php   } 
else if ($countVar == 4) { ?>
	<div class="ad_mobile_incontent">
	<div style="text-align:center!important;">	
		<?php if (function_exists ('adinserter')) echo adinserter (12); ?></div>
		<div class="post_divider"></div>
	</div>

<?php } ?>

<?php $countVar++; ?> 
<?php endwhile; else: ?>
<?php get_page_template('404'); ?>
<?php endif; ?>
<?php get_footer(); ?>	