<div class="sidebar_div"></div>
  <div class="sidebar_wrapper" style="margin-top: -10px; margin-bottom: -10px; text-align: left !important;">
    <h3 class="storytitle" style="line-height: 2em; font-size: 11.5px; text-transform: uppercase; font-weight: bold;">Navigate</h3>
  </div>
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
  <!-- <?php } ?> -->