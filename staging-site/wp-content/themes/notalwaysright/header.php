<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" <?php  language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="WvMwwu-Vr8x-KZ4U1tkHBsBaiQFQMt3YWyu4qOhj9DU" />
<meta name="google-site-verification" content="yRJeGkpWccPJfW6M0NQoTOReuPDGGN3d-uZ7OMFtQmQ" />
<meta http-equiv="Content-Type" content="<?php  bloginfo('html_type'); ?>; charset=<?php  bloginfo('charset'); ?>" />
<meta name="msApplication-ID" content="7044Ace10.NotAlwaysRight" />
<meta name="msApplication-PackageFamilyName" content="7044Ace10.NotAlwaysRight_qn1xt0xxp1ehm" />
<meta property="fb:pages" content="205072616196452" />
<title><?php  wp_title('&raquo;', true, 'right'); ?> <?php  bloginfo('name'); ?></title>
<link rel="shortcut icon" href="/favicon_nar.png" />
<link rel="apple-touch-icon" href="/favicon_nar.png" />
<link href="/wp-content/themes/notalwaysright/bootstrap.css" rel="stylesheet" media="screen" type="text/css">
<link href="/wp-content/themes/notalwaysright/bootstrap-responsive.css" rel="stylesheet" media="screen" type="text/css">
<link href="/wp-content/themes/notalwaysright/style.css" rel="stylesheet" media="screen" type="text/css">
<link rel="stylesheet" href="/wp-content/themes/notalwaysright/swipenavigation.css" rel="stylesheet" media="screen">
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,600,400,800' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<script>
var propertag = propertag || {};
propertag.cmd = propertag.cmd || [];
(function() {
 var pm = document.createElement('script');
 pm.async = true; pm.type = 'text/javascript';
 var is_ssl = 'https:' == document.location.protocol;
 pm.src = (is_ssl ? 'https:' : 'http:') + '//global.proper.io/notalwaysright.min.js';
 var node = document.getElementsByTagName('script')[0];
 node.parentNode.insertBefore(pm, node);
})();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-1416974-5', 'auto');
  ga('send', 'pageview');
</script>
<script>
jQuery(document).ready(function() {
    jQuery('.social-share').click(function(e) {
        e.preventDefault();
        window.open(jQuery(this).attr('href'), 'socialShareWindow', 'height=450, width=550, top=' + (jQuery(window).height() / 2 - 275) + ', left=' + (jQuery(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
        return false;
    });
});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1507345689566425";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>
<!--// CUSTOM 9/14/16 //-->
<div id="topbar_leaderboard">
<?php if (function_exists ('adinserter')) echo adinserter (8); ?>
</div>
<!--// Desktop Topbar_a //-->
<div id="topbar_a" class="<?php 
	if ( is_category("Working") ) { echo "topbar_border_naw"; } 
	else if ( is_category("Romantic") ) { echo "topbar_border_naro"; } 
	else if ( is_category("Related") ) { echo "topbar_border_nare"; }
	else if ( is_category("Learning") ) { echo "topbar_border_nal"; }
	else if ( is_category("Friendly") ) { echo "topbar_border_naf"; }
	else if ( is_category("Hopeless") ) { echo "topbar_border_nah"; }
	else if ( is_category("Healthy") ) { echo "topbar_border_nahe"; }
	else { echo "topbar_border_nar"; }
?>">
  <div class="container">
      <div id="logos"><!--// CUSTOM 9/14/16 //--> 
<a href="/"><img src="//Notalwaysright.com/wp-content/themes/notalwaysright/images/nan_flat_nar_masthead.png" alt="Not Always Right" title="Not Always Right" id="topbar_a_logo" /
></a>
      </div>
      <div id="navs"><!--// CUSTOM 9/14/16 //--> 
  <div id="navs_social_fb"><div class="fb-like" data-href="https://facebook.com/notalwaysright" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></div><!--// END CUSTOM 11/21/15 Navbar FB Like shuffle //-->
    <!--// CUSTOM 10/29/17 RM YouTube <div id="navs_social_ig"><a href="//www.youtube.com/channel/UCGEQHGktMOJfXF5o3Peunew"><img src="/wp-content/themes/notalwaysright/images/nan_flat_youtube_color.png" alt="Not Always Right: YouTube" title="Not Always Right: YouTube" /></a></div> //-->
        <div id="navs_social_ig"><a href="//instagram.com/officialnotalwaysright"><img src="/wp-content/themes/notalwaysright/images/nan_flat_instagram.png" alt="Not Always Right: Instagram" title="Not Always Right: Instagram" /></a></div>
        <div id="navs_social_ig"><a href="//twitter.com/notalwaysright"><img src="/wp-content/themes/notalwaysright/images/nan_flat_twitter.png" alt="Not Always Right: Twitter" title="Not Always Right: Twitter" /></a></div>
        <a href="#" id="searchselect"><img src="/wp-content/themes/notalwaysright/images/nan_flat_search.png" alt="Search" title="Search" /></a>
        <div id="menu_search">
              <form style="display: inline;" id="searchform" method="get" action="//notalwaysright.com">
                  <div class="input-append">
                    <input class="span3" type="text" name="s" id="s">
                    <button class="btn" type="submit">SEARCH</button>
                  </div>
                </form>
          </div>
        <script type="text/javascript">
          var flip = 0;
          jQuery( "#searchselect" ).click(function() {
            jQuery( "#menu_search" ).fadeToggle( 150, "swing", flip++ % 2 === 0 );
          });
        </script>
      </div>
  </div>
</div>
   <!--// Mobile Navbar //-->
    <div class="navbar navbar-static-top navbar-inverse">
        <div class="navbar-inner <?php 
	if ( is_category("Working") ) { echo "topbar_border_naw"; } 
	else if ( is_category("Romantic") ) { echo "topbar_border_naro"; } 
	else if ( is_category("Related") ) { echo "topbar_border_nare"; }
	else if ( is_category("Learning") ) { echo "topbar_border_nal"; }
	else if ( is_category("Friendly") ) { echo "topbar_border_naf"; }
	else if ( is_category("Hopeless") ) { echo "topbar_border_nah"; }
	else if ( is_category("Healthy") ) { echo "topbar_border_nahe"; }
	else { echo "topbar_border_nar"; }
?>">
          <div class="container">
<!--// CUSTOM 9/14/16 - Updated margin + NAR logo URL, Remove sister site icons //-->
<a class="brand" href="/"><img src="//Notalwaysright.com/wp-content/themes/notalwaysright/images/nan_flat_nar_masthead.png" alt="Not Always Right" title="Not Always Right" /
></a>
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="nav-collapse collapse">
                <ul class="nav">
    <!--// Navigation Dropdown //-->
    <!--// CUSTOM 9/14/16 //-->   
<li class="hamburger_nav hamburger_nav_important"><a href="<?php                 if ( in_category( 552 ) ) {
    echo "/random-story/?cat=right"; }
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
    elseif ( in_category( 4390 ) ) {
        echo '/random-story/?cat=healthy';
    }
    elseif ( in_category( 189 ) ) {
        echo '/random-story/?cat=unfiltered';
    }
    else {
        echo '/random-story/?cat=right';
    }
?>">Random Story</a></li>
		<li class="hamburger_nav hamburger_nav_important"><a href="/add-story">Add Story</a></li>
                <!--// 5/22/17 <li class="hamburger_nav hamburger_nav_important"><a href="/popular">Popular</a></li> //-->
                <li class="hamburger_nav hamburger_nav_unimportant"><a href="/about-faq">About/FAQ</a></li>
    <li class="hamburger_nav hamburger_nav_unimportant"><a href="//notalwaysright.com/contact">Contact</a></li>
    <li class="hamburger_nav hamburger_nav_unimportant"><a href="/privacy-policy">Privacy Policy</a></li>     
    <li class="hamburger_nav hamburger_nav_unimportant"><a href="/terms-of-use">Terms of Use</a></li>
                <li class="dropdown" id="menu_search_dropdown" style="padding-top: 10px; padding-bottom: 40px; margin-bottom: 25px;"> <!--// CUSTOM 11/21/15 margin-bottom decreased //-->
                  <div><a href="http://bit.ly/18CxSGj"><img src="/wp-content/themes/notalwaysright/images/flaticon_facebook.gif" class="mobile_icons_social" alt="Not Always Right on Facebook" /></a>
                  <a href="http://bit.ly/13tusrf"><img src="/wp-content/themes/notalwaysright/images/flaticon_twitter.gif" class="mobile_icons_social" alt="Not Always Right on Twitter" /></a>
                  <a href="http://instagram.com/officialnotalwaysright"><img src="/wp-content/themes/notalwaysright/images/flaticon_instagram.gif" class="mobile_icons_social" alt="Not Always Right on Instagram" /></a>
            <!--// CUSTOM 10/29/17 RM YouTube <a href="//www.youtube.com/channel/UCGEQHGktMOJfXF5o3Peunew"><img src="//notalwaysright.com/wp-content/themes/notalwaysright/images/flaticon_youtube_red.png" class="mobile_icons_social" alt="Not Always Right on YouTube" /></a></div> //--> 
                </li>
                <li class="dropdown" id="menu_search_dropdown"><!--// CUSTOM 11/21/15 -- Removed inline style //-->
                  <form style="display: inline;" id="searchform" method="get" action="//notalwaysright.com">
                      <div class="input-append">
                        <input class="span3" type="text" name="s" id="s">
                        <button class="btn" type="submit"><i class="icon-search"></i></button>
                      </div>
                    </form>
                </li>
            </ul>
            </div><!--/.nav-collapse -->
          </div> <!--// container //-->
        </div> <!--// navbar-inner //-->
      </div> <!--// mobile navbar //-->
    <!--// Announce Bar //-->
    <div class="alert alert-announce">
       <div class="container" id="main_announce" >
          <div class="row">
              <div class="span12">
                  <div>
      <div id="announce_2">
        <div class="post_supernav">
   <a href="<?php
    if ( in_category( 552 ) ) {
    echo "/random-story/?cat=right"; }
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
    elseif ( in_category( 4390 ) ) {
        echo '/random-story/?cat=healthy';
    }
    elseif ( in_category( 189 ) ) {
        echo '/random-story/?cat=unfiltered';
    }
    else {
        echo '/random-story/?cat=right';
    }
?>"><div class="post_supernav_link_right" id="pslr_random">Random</div></a>
          <a href="/add-story/"><div class="post_supernav_link_right" id="pslr_add">Add</div></a>
        </div>
                        </div>
      <div id="announce_1"><!--// CUSTOM 9/18/16 //-->
        <div id="announce_1_mobile">
          <div class="swipenavigation js-swipenavigation">
            <ul>
              <li id="<?php $URIpath = $_SERVER['REQUEST_URI']; if (strpos($URIpath, '/all/') !== false) { echo "activetab_all"; } else { echo "inactivetab"; } ?>">
                <a href="/all"><strong>All</strong></a>
              </li>
	      <li id="<?php $URIpath = $_SERVER['REQUEST_URI']; if ((strpos($URIpath, '/popular/') !== false)) { echo 'activetab_all'; } else { echo 'inactivetab'; } ?>">
                <a href="/popular"><strong>Popular</strong></a>
	      </li>
              <li id="<?php $fullURIpath = 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; $URIpath = $_SERVER['REQUEST_URI']; if ( (strpos($fullURIpath, '.com/page/') !== false) || (strpos($fullURIpath, '/right/') !== false) || ($URIpath == '/') ) { echo "activetab_all"; } else { echo "inactivetab"; } ?>">
                <a href="/">Right</a>
              </li>
              <li id="<?php if (is_category('Working')) { echo "activetab_naw"; } else { echo "inactivetab"; } ?>">
                <a href="/working">Working</a>
              </li>
              <li id="<?php if (is_category('Romantic')) { echo "activetab_naro"; } else { echo "inactivetab"; } ?>">
                <a href="/romantic">Romantic</a>
              </li>
              <li id="<?php if (is_category('Related')) { echo "activetab_nare"; } else { echo "inactivetab"; } ?>">
                <a href="/related">Related</a>
              </li>
              <li id="<?php if (is_category('Learning')) { echo "activetab_nal"; } else { echo "inactivetab"; } ?>">
                <a href="/learning">Learning</a>
              </li>
              <li id="<?php if (is_category('Friendly')) { echo "activetab_naf"; } else { echo "inactivetab"; } ?>">
                <a href="/friendly">Friendly</a>
              </li>
              <li id="<?php if (is_category('Hopeless')) { echo "activetab_nah"; } else { echo "inactivetab"; } ?>">
                <a href="/hopeless">Hopeless</a>
              </li>
              <li id="<?php if (is_category('Healthy')) { echo "activetab_nahe"; } else { echo "inactivetab"; } ?>">
                <a href="/healthy">Healthy</a>
              </li>
              <li id="<?php if (is_category('Unfiltered')) { echo "activetab_uf"; } else { echo "inactivetab"; } ?>">
                <a href="/unfiltered">Unfiltered</a>
              </li>
            </ul>
          </div>
        </div> <!--// End announce_1_mobile //-->
        <div id="announce_1_desktop">
          <div class="post_supernav">
            <a href="/all"><div class="post_supernav_link" id="<?php $URIpath = $_SERVER['REQUEST_URI']; if (strpos($URIpath, '/all/') !== false) { echo "activetab_all"; } else { echo "inactivetab"; } ?>"><strong>All</strong></div></a>
            <a href="/popular"><div class="post_supernav_link" id="<?php $URIpath = $_SERVER['REQUEST_URI']; if ((strpos($URIpath, '/popular/') !== false)) { echo 'activetab_all'; } else { echo 'inactivetab'; } ?>"><strong>Popular</strong></div></a>
            <a href="/"><div class="post_supernav_link" id="<?php $fullURIpath = 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]; $URIpath = $_SERVER['REQUEST_URI']; if ( (strpos($fullURIpath, '.com/page/') !== false) || (strpos($fullURIpath, '/right/') !== false) || ($URIpath == '/') ) { echo "activetab_all"; } else { echo "inactivetab"; } ?>">Right</div></a>
            <a href="/working" ><div class="post_supernav_link" id="<?php if (is_category('Working')) { echo "activetab_naw"; } else { echo "inactivetab"; } ?>">Working</div></a>
            <a href="/romantic" ><div class="post_supernav_link" id="<?php if (is_category('Romantic')) { echo "activetab_naro"; } else { echo "inactivetab"; } ?>">Romantic</div></a>
            <a href="/related" ><div class="post_supernav_link" id="<?php if (is_category('Related')) { echo "activetab_nare"; } else { echo "inactivetab"; } ?>">Related</div></a>
            <a href="/learning" ><div class="post_supernav_link" id="<?php if (is_category('Learning')) { echo "activetab_nal"; } else { echo "inactivetab"; } ?>">Learning</div></a>
            <a href="/friendly" ><div class="post_supernav_link" id="<?php if (is_category('Friendly')) { echo "activetab_naf"; } else { echo "inactivetab"; } ?>">Friendly</div></a>
            <a href="/hopeless"><div class="post_supernav_link" id="<?php if (is_category('Hopeless')) { echo "activetab_nah"; } else { echo "inactivetab"; } ?>">Hopeless</div></a>
            <a href="/healthy"><div class="post_supernav_link" id="<?php if (is_category('Healthy')) { echo "activetab_nahe"; } else { echo "inactivetab"; } ?>">Healthy</div></a>
            <a href="/unfiltered"><div class="post_supernav_link" id="<?php if (is_category('Unfiltered')) { echo "activetab_uf"; } else { echo "inactivetab"; } ?>">Unfiltered</div></a>
          </div>
        </div> <!--// End announce_1_desktop //-->
      </div> <!--// End announce_1 //-->
                  </div>
    <!--// END CUSTOM 1/22/16 //-->
                </div>
              </div>
          </div>
    </div>
    <!--// Main Content Container //-->
    <div class="container" id="main_content">
      <div class="row"> <!--// margin-left: 0px;  //-->
      <?php if (is_page('about') || is_page('help')) : ?>
        <div class="about8"> <!--// margin-left: -10px; //-->
          <div class="container_content">
            <h3 class="abouttitle" style="padding-bottom: 15px;"><?php the_title(); ?></h3>
            <div class="about_divider"></div>
      <? elseif (is_page('conduct')) : ?>
        <div class="container_content">
          <h3 class="abouttitle" style="padding-bottom: 15px;"><?php the_title(); ?></h3>
          <div class="about_divider"></div>
      <? else : ?>
        <div class="span8">
          <div class="container_content">
      <? endif; ?>
      
    <!--// CUSTOM 9/14/16 //-->
<div id="ad_mobile_leaderboard">
<?php if (function_exists ('adinserter')) echo adinserter (9); ?>
</div>
<!-- end header -->