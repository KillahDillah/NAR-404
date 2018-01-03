<!-- begin footer -->
					</div> <!--// container_content //-->
				
<?php if (is_page('about') || is_page('help') || (!isset($_SERVER['HTTP_REFERER'])) ) : ?>
	</div> <!--// span8 || about8//-->
	<div class="about4" style="background-color: #fff;"><?php get_sidebar(); ?></div>
<? elseif (is_page('conduct')) : ?>
	
<? else : ?>
</div> <!--// span8 || about8//-->
<div class="span4" style="background-color: #fff;"><?php get_sidebar(); ?></div>
<? endif; ?>
				
			</div> <!--// row //-->
		</div> <!--// container //-->
		<?php if (is_page('about')) { ?> 
			<div class="about_divider"></div>
		<?php } ?>
		<?php if (is_page('help')) { ?>
		</div>
		<?php } ?>
			<div class="container-foot">
		
        	<div class="row">
        		<!--// Desktop Page Navigation //-->
          		<div class="span12">
	<?php if (is_page('help')) { ?>
		<div class="foot-contain">
		<section class="help-footer" style="border-bottom: none;
    text-align: center;
    padding-top: 15px;
    padding-bottom: 10px;
    background: #323232;">
    		<p>
			<a href="/about/">About</a> |
			<a href="/faq">Help</a> |
			<a href="/conduct">Conduct</a> |
			<a href="/terms-of-use/">Terms of Use</a> |
			<a href="/privacy-policy/">Privacy Policy</a>
    		</p>
    	<p><b style="color: #c65428">Not</b><b >AlwaysRight.com</b> © <?php $blogTime = current_time('Y'); echo $blogTime;  ?></p>
	</section>	
	</div>
	<?php } ?>
		<div id="div_pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div>
	<?php if (function_exists ('adinserter')) echo adinserter (3); ?>
				</div>
				<!--// Mobile Page Navigation //-->
				<?php if (!is_single()) { ?>

				<!--// CUSTOM 5/22/17 If root /right //-->
				<?php  $fullURIpath = 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; $URIpath = $_SERVER['REQUEST_URI']; if ( (strpos($fullURIpath, '.com/page/') !== false) || ($URIpath == '/') ) { ?>
				<!--// Instantiate /RIGHT category //-->

<?php
  // set up or arguments for our custom query
  $paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
  $query_args = array(
    'post_type' => 'post',
    'category_name' => 'Right',
    'posts_per_page' => 5,
    'paged' => $paged
  );
  // create a new instance of WP_Query
  $custom2_query = new WP_Query( $query_args );
?>

 				<?php if ( $custom2_query->have_posts() ) { ?>
				<?php if ($custom2_query->max_num_pages > 1) { ?>
				<div id="mobile_pagenavi" alt="Right Max Pages <?php echo $custom2_query->max_num_pages; ?> Current Page <?php echo (int) $paged; ?>">
					<div style="display: inline; width: 30%;">
					<?php echo get_previous_posts_link( '<div class="mobile_pagenavi_style">&laquo; Previous</div>', $custom2_query->max_num_pages ); ?>
					</div>
					<!--// 5/22/2017 <div style="margin: 0 auto; display: inline;"><a href="/random-story"><div class="randombutton_brighter" id="randmobile" style="margin-bottom: 10px;">RANDOM</div></a></div> //-->
					<div style="display: inline; width: 30%;">
					<?php echo get_next_posts_link( '<div class="mobile_pagenavi_style">Next &raquo;</div>', $custom2_query->max_num_pages ); ?>
					</div>
					<?php if (function_exists ('adinserter')) echo adinserter (10); ?>
				</div>
				<?php } /* End custom2_query->max_num_pages */ ?>
				<?php } ?>

				<!--// CUSTOM 5/22/17 else if NOT root /right //-->
				<?php } else { ?>
				<div id="mobile_pagenavi" alt="notRight">
					<!--// CUSTOM 11/19/15 - added display: inline, width: 30%, and removed floats //-->
					<div style="display: inline; width: 30%;"><?php previous_posts_link('<div class="mobile_pagenavi_style">&laquo; Previous</div>')  ?></div>
					<!--// 5/22/2017 <div style="margin: 0 auto; display: inline;"><a href="/random-story"><div class="randombutton_brighter" id="randmobile" style="margin-bottom: 10px;">RANDOM</div></a></div> //-->
					<div style="display: inline; width: 30%;"><?php next_posts_link('<div class="mobile_pagenavi_style">Next &raquo;</div>','')  ?></div>
					<!--// END CUSTOM 11/19/15 //-->

<?php if (function_exists ('adinserter')) echo adinserter (10); ?>
				</div>
				<?php } ?>
				<div id="mobile_pagenavi_gutter"></div>
				<?php  } ?>
			</div>
	</div>

	<div style="clear: both;"></div>


</div> <!--// End container / main_content //-->
<?php if (!isset($_SERVER['HTTP_REFERER'])) : ?>
  </div> <!--// end again//-->
</div> <!--//end error-wrapper//-->
<? endif ; ?>
		</div>  <!--// span12 //-->
	</div>  <!--// row //-->
</div>  <!--// container //-->

</DIV> <!--// END FOOTER //-->


<!--// RESPONSIVE ADS //-->
<script data-cfasync-"true" src="//notalwaysright.com/wp-content/themes/notalwaysright/js/bootstrap.js"></script>
<script>
// Fixes search issue clicking on form dropdown toggle off. Stops propagation click event form input elements.	
jQuery(function() {
	  // Setup drop down menu 
	  jQuery('.dropdown-toggle').dropdown();

	  // Fix input element click problem 
	  jQuery('.dropdown-menu input, .dropdown-menu button').click(function(e) { 
	    e.stopPropagation(); 
	  });
 }); 
</script>
<?php wp_footer(); ?>


<span style="display: none;" id="fully_loaded"></span>
</body>
</html>