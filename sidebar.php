<div id="sidebar">

  <?php if (!isset($_SERVER['HTTP_REFERER'])) : ?>
    <div class="sidebar_wrapper_atf_ad" style="text-align: center; margin-top: 20px; margin-bottom: 70px;">
  <? else : ?>
    <div class="sidebar_wrapper_atf_ad" style="text-align: center; margin-bottom:20px; width: 300px;">
      <?php if (function_exists ('adinserter')) echo adinserter (2); ?>
  <? endif; ?>
  </div>

<?php if (!is_page('about') || !is_page('help') || !is_page('conduct') ) { ?>
  <div class="newpage">
    <?php get_page('newnew'); ?>
  </div> } ; ?>

<?php if (isset($_SERVER['HTTP_REFERER'])) { ?>
  <div class="sidebar_wrapper_atf_ad" style="text-align: center; margin-top: 20px; margin-bottom: 70px;">
  <?php if (function_exists ('adinserter')) echo adinserter (4); ?>
  </div>
  <div class="fb-page" data-href="https://www.facebook.com/notalwaysright/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/notalwaysright/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/notalwaysright/">Not Always Right</a></blockquote></div>
} ; ?>

  <?php if (dynamic_sidebar()) { } ?>