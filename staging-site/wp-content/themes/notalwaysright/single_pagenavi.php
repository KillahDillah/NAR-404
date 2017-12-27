<!-- NEXT/PREV LINKS -->

<!-- 1. ALL POSTS EXCEPT UNFILTERED  //-->

<?php if (!in_category("unfiltered")) { ?>

<div class="post" style="padding-bottom: 25px; margin-top: 10px;" id="desktop_storynavi_style"> <!--// CUSTOM 11/19/15 - desktop_storynavi_style //-->
<div style="float: left;"> 
<?php if(get_adjacent_post(true, '189', true, 'category')) { ?><a href="<?php $prev_post = get_adjacent_post(true, '189', true, 'category'); echo get_permalink($prev_post->ID); ?>"><div class="nextprevbutton" style="float: left; color: white;">&laquo; PREVIOUS STORY</div></a><?php } ?>
</div>
<div style="float: right;"> 
<?php if(get_adjacent_post(true, '189', false, 'category')) { ?><a href="<?php $next_post = get_adjacent_post(true, '189', false, 'category'); echo get_permalink($next_post->ID); ?>"><div class="nextprevbutton" style="float: left; color: white;">NEXT STORY &raquo;</div></a><?php } ?>
</div>
</div>

<div class="nextprevtitles" style="font-size: 0.7em; clear: both;">
<div style="float: left;"><?php if(get_adjacent_post(true, '189', true, 'category')) { ?><a href="<?php $prev_post = get_adjacent_post(true, '189', true, 'category'); echo get_permalink($prev_post->ID); ?>"><?php echo $prev_post->post_title; ?></a><?php } ?></div> 
<div style="float: right;"><?php if(get_adjacent_post(true, '189', false, 'category')) { ?><a href="<?php $next_post = get_adjacent_post(true, '189', false, 'category'); echo get_permalink($next_post->ID); ?>"><?php echo $next_post->post_title; ?></a><?php } ?></div> 
</div>

<!--// CUSTOM 11/19/15 - non-UF mobile single post navigation added //-->
<div id="mobile_pagenavi">
    <div style="display: inline; width: 30%;"><?php if(get_adjacent_post(true, '189', true, 'category')) { ?><a href="<?php $prev_post = get_adjacent_post(true, '189', true, 'category'); echo get_permalink($prev_post->ID); ?>"><div class="mobile_pagenavi_style">&laquo; Previous</div></a><?php } ?></div>
	<div style="margin: 0 auto; display: inline;"><a href="<?php if ( in_category( 552 ) ) {
        echo '/random-story/?cat=right';
    }
    elseif ( in_category( 551 ) ) {
        echo '/random-story/?cat=working';
    }
    elseif ( in_category( 550 ) ) {
        echo '/random-story/?cat=romantic';
    }
    elseif ( in_category( 549 ) ) {
        echo '/random-story/?cat=related';
    }
    elseif ( in_category( 548 ) ) {
        echo '/random-story/?cat=learning';
    }
    elseif ( in_category( 547 ) ) {
        echo '/random-story/?cat=friendly';
    }
    elseif ( in_category( 553 ) ) {
        echo '/random-story/?cat=hopeless';
    }
    else {
        echo '/random-story/?cat=right';
    }
?>"><div class="randombutton_brighter" id="randmobile" style="margin-bottom: 10px;">RANDOM</div></a></div>
    <div style="display: inline; width: 30%;"><?php if(get_adjacent_post(true, '189', false, 'category')) { ?><a href="<?php $next_post = get_adjacent_post(true, '189', false, 'category'); echo get_permalink($next_post->ID); ?>"><div class="mobile_pagenavi_style">Next &raquo;</div></a><?php } ?></div>
<!--// 7/19/17 Single Page Sticky Ad //--> <?php if (function_exists ('adinserter')) echo adinserter (10); ?> 
</div>
<div id="mobile_pagenavi_gutter"></div>
<!--// END CUSTOM 11/19/15 //-->

<?php } else if (in_category("unfiltered")) { ?>

<!-- 2. ONLY UNFILTERED POSTS  //-->

<div class="post" style="padding-bottom: 25px; margin-top: 10px;" id="desktop_storynavi_style"> <!--// CUSTOM 11/19/15 - desktop_storynavi_style //-->
<div style="float: left;"> 
<?php if(get_adjacent_post(true, '', true)) { ?><a href="<?php $prev_post = get_adjacent_post(true, '', true); echo get_permalink($prev_post->ID); ?>"><div class="nextprevbutton" style="float: left; color: white;">&laquo; PREVIOUS STORY</div></a><?php } ?>
</div>
<div style="float: right;"> 
<?php if(get_adjacent_post(true, '', false)) { ?><a href="<?php $next_post = get_adjacent_post(true, '', false); echo get_permalink($next_post->ID); ?>"><div class="nextprevbutton" a<!-- NEXT/PREV LINKS -->

<!-- 1. ALL POSTS EXCEPT UNFILTERED  //-->

<?php if (!in_category("unfiltered")) { ?>

<div class="post" style="padding-bottom: 25px; margin-top: 10px;" id="desktop_storynavi_style"> <!--// CUSTOM 11/19/15 - desktop_storynavi_style //-->
<div style="float: left;"> 
<?php if(get_adjacent_post(true, '189', true, 'category')) { ?><a href="<?php $prev_post = get_adjacent_post(true, '189', true, 'category'); echo get_permalink($prev_post->ID); ?>"><div class="nextprevbutton" style="float: left; color: white;">&laquo; PREVIOUS STORY</div></a><?php } ?>
</div>
<div style="float: right;"> 
<?php if(get_adjacent_post(true, '189', false, 'category')) { ?><a href="<?php $next_post = get_adjacent_post(true, '189', false, 'category'); echo get_permalink($next_post->ID); ?>"><div class="nextprevbutton" style="float: left; color: white;">NEXT STORY &raquo;</div></a><?php } ?>
</div>
</div>

<div class="nextprevtitles" style="font-size: 0.7em; clear: both;">
<div style="float: left;"><?php if(get_adjacent_post(true, '189', true, 'category')) { ?><a href="<?php $prev_post = get_adjacent_post(true, '189', true, 'category'); echo get_permalink($prev_post->ID); ?>"><?php echo $prev_post->post_title; ?></a><?php } ?></div> 
<div style="float: right;"><?php if(get_adjacent_post(true, '189', false, 'category')) { ?><a href="<?php $next_post = get_adjacent_post(true, '189', false, 'category'); echo get_permalink($next_post->ID); ?>"><?php echo $next_post->post_title; ?></a><?php } ?></div> 
</div>

<!--// CUSTOM 11/19/15 - non-UF mobile single post navigation added //-->
<div id="mobile_pagenavi">
    <div style="display: inline; width: 30%;"><?php if(get_adjacent_post(true, '189', true, 'category')) { ?><a href="<?php $prev_post = get_adjacent_post(true, '189', true, 'category'); echo get_permalink($prev_post->ID); ?>"><div class="mobile_pagenavi_style">&laquo; Previous</div></a><?php } ?></div>
	<div style="margin: 0 auto; display: inline;"><a href="<?php if ( in_category( 552 ) ) {
        echo '/random-story/?cat=right';
    }
    elseif ( in_category( 551 ) ) {
        echo '/random-story/?cat=working';
    }
    elseif ( in_category( 550 ) ) {
        echo '/random-story/?cat=romantic';
    }
    elseif ( in_category( 549 ) ) {
        echo '/random-story/?cat=related';
    }
    elseif ( in_category( 548 ) ) {
        echo '/random-story/?cat=learning';
    }
    elseif ( in_category( 547 ) ) {
        echo '/random-story/?cat=friendly';
    }
    elseif ( in_category( 553 ) ) {
        echo '/random-story/?cat=hopeless';
    }
    else {
        echo '/random-story/';
    }
?>"><div class="randombutton_brighter" id="randmobile" style="margin-bottom: 10px;">RANDOM</div></a></div>
    <div style="display: inline; width: 30%;"><?php if(get_adjacent_post(true, '189', false, 'category')) { ?><a href="<?php $next_post = get_adjacent_post(true, '189', false, 'category'); echo get_permalink($next_post->ID); ?>"><div class="mobile_pagenavi_style">Next &raquo;</div></a><?php } ?></div>
<!--// 7/19/17 Single Page Sticky Ad //--> <?php if (function_exists ('adinserter')) echo adinserter (10); ?> 
</div>
<div id="mobile_pagenavi_gutter"></div>
<!--// END CUSTOM 11/19/15 //-->

<?php } else if (in_category("unfiltered")) { ?>

<!-- 2. ONLY UNFILTERED POSTS  //-->

<div class="post" style="padding-bottom: 25px; margin-top: 10px;" id="desktop_storynavi_style"> <!--// CUSTOM 11/19/15 - desktop_storynavi_style //-->
<div style="float: left;"> 
<?php if(get_adjacent_post(true, '', true)) { ?><a href="<?php $prev_post = get_adjacent_post(true, '', true); echo get_permalink($prev_post->ID); ?>"><div class="nextprevbutton" style="float: left; color: white;">&laquo; PREVIOUS STORY</div></a><?php } ?>
</div>
<div style="float: right;"> 
<?php if(get_adjacent_post(true, '', false)) { ?><a href="<?php $next_post = get_adjacent_post(true, '', false); echo get_permalink($next_post->ID); ?>"><div class="nextprevbutton" style="float: left; color: white;">NEXT STORY &raquo;</div></a><?php } ?>
</div>
</div>

<!--// CUSTOM 11/19/15 - UF mobile single post navigation added //-->
<div id="mobile_pagenavi">
	<div style="display: inline; width: 30%;"><?php if(get_adjacent_post(true, '', true)) { ?><a href="<?php $prev_post = get_adjacent_post(true, '', true); echo get_permalink($prev_post->ID); ?>"><div class="mobile_pagenavi_style">&laquo; Previous</div></a><?php } ?></div>
	<div style="margin: 0 auto; display: inline;"><a href="<?php if ( in_category( 189 ) ) {
        echo '/random-story/?cat=unfiltered';
    }
    else {
        echo '/random-story/';
    }
?>"><div class="randombutton_brighter" id="randmobile" style="margin-bottom: 10px;">RANDOM</div></a></div>
	<div style="display: inline; width: 30%;"><?php if(get_adjacent_post(true, '', false)) { ?><a href="<?php $next_post = get_adjacent_post(true, '', false); echo get_permalink($next_post->ID); ?>"><div class="mobile_pagenavi_style">Next &raquo;</div></a><?php } ?></div>
<!--// 7/19/17 Single Page Sticky Ad //--> <?php if (function_exists ('adinserter')) echo adinserter (10); ?> 
</div>
<div id="mobile_pagenavi_gutter"></div>
<!--// END CUSTOM 11/19/15 //-->

<?php } ?>

<!-- END NEXT/PREV LINKS -->style="float: left; color: white;">NEXT STORY &raquo;</div></a><?php } ?>
</div>
</div>

<!--// CUSTOM 11/19/15 - UF mobile single post navigation added //-->
<div id="mobile_pagenavi">
	<div style="display: inline; width: 30%;"><?php if(get_adjacent_post(true, '', true)) { ?><a href="<?php $prev_post = get_adjacent_post(true, '', true); echo get_permalink($prev_post->ID); ?>"><div class="mobile_pagenavi_style">&laquo; Previous</div></a><?php } ?></div>
	<div style="margin: 0 auto; display: inline;"><a href="<?php if ( in_category( 189 ) ) {
        echo '/random-story/?cat=unfiltered';
    }
    else {
        echo '/random-story/';
    }
?>"><div class="randombutton_brighter" id="randmobile" style="margin-bottom: 10px;">RANDOM</div></a></div>
	<div style="display: inline; width: 30%;"><?php if(get_adjacent_post(true, '', false)) { ?><a href="<?php $next_post = get_adjacent_post(true, '', false); echo get_permalink($next_post->ID); ?>"><div class="mobile_pagenavi_style">Next &raquo;</div></a><?php } ?></div>
<!--// 7/19/17 Single Page Sticky Ad //--> <?php if (function_exists ('adinserter')) echo adinserter (10); ?> 
</div>
<div id="mobile_pagenavi_gutter"></div>
<!--// END CUSTOM 11/19/15 //-->

<?php } ?>

<!-- END NEXT/PREV LINKS -->