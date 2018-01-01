<!-- begin sidebar -->
<div id="sidebar">           
<?php if (!is_page('about') && !is_page('help') && !is_page('conduct') ) { ?>

	<?php if (!isset($_SERVER['HTTP_REFERER'])) : ?>
		<div class="sidebar_wrapper_atf_ad" style="text-align: center; margin-bottom: 60px;">
	<? else : ?>
		<div class="sidebar_wrapper_atf_ad" style="text-align: center; margin-bottom:20px; width: 300px;">
	<? endif; ?>
		<!--// NAR - Desktop Sidebar A //-->
		<?php if ( !is_page('about') || !is_page('conduct') || !is_page('help') || is_page_template('404') && function_exists ('adinserter')) echo adinserter (2); ?>

	</div>

	<div class="sidebar_div"></div>

	<!-- CUSTOM 9/14/16 - Updated Navigate margin-top and margin-bottom -->
	
	<div class="sidebar_wrapper" style="margin-top: -10px; margin-bottom: -10px; text-align: left !important;">
		<h3 class="storytitle" style="line-height: 2em; font-size: 11.5px; text-transform: uppercase; font-weight: bold;">Navigate</h3>
	</div>

	<!-- CUSTOM 9/14/16 Removed sister site logos -->

	<div class="sidebar_div"></div>

	<div class="sidebar_wrapper" style="margin-top: -10px; <?php if ( (is_single()) || (is_page()) ) { ?><?php } ?>">

		<div><!--// Taxonomy Widget //--> 
			<?php 
				$terms = array(
					'taxonomy'        => 'post_tag',
					'select_name'     => 'View by Tag',
					'max_name_length' => 0,
					'cutoff'          => '&hellip;',
					'limit'           => 0,
					'order'           => 'ASC',
					'orderby'         => 'name',
					'threshold'       => 10,
					'incexc'          => 'exclude',
					'incexc_ids'      => array(),
					'hide_empty'      => true,
					'post_counts'     => true
	
				);
				echo taxonomy_dropdown_widget($terms);


			?>
		</div>

		<div>
			<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
		  		<option value=""><?php echo esc_attr( __( 'View by Month' ) ); ?></option> 
		  		<?php wp_get_archives( 'type=monthly&format=option&show_post_count=0' ); ?>
			</select>
		</div>

		<div>
			<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
		  		<option value=""><?php echo esc_attr( __( 'View by Year' ) ); ?></option> 
		  		<?php wp_get_archives( 'type=yearly&format=option&show_post_count=0' ); ?>
			</select>
		</div>

	</div>
	<?php } ?>
	<!-- CUSTOM 9/14/16 Changed margin-bottom: 30px; -->
	<div class="sidebar_wrapper_atf_ad" style="text-align: center; margin-top: 20px; margin-bottom: 70px;">
		
		<!--// NAR - Desktop Sidebar B //-->
		<?php if (function_exists ('adinserter')) echo adinserter (4); ?>

	</div>
	
	
	

<!-- CUSTOM 10/29/17 FB -->
<?php if (!isset($_SERVER['HTTP_REFERER'])) : ?>
<? else : ?>
<div class="fb-page" data-href="https://www.facebook.com/notalwaysright/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/notalwaysright/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/notalwaysright/">Not Always Right</a></blockquote></div>
<? endif; ?>

	<!-- CUSTOM 9/14/16 Load dynamic sidebar -->
	<?php if (dynamic_sidebar()) { } ?>

<!-- end sidebar -->