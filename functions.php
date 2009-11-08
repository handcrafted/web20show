<?php

function analytic_footer() { ?>
  <script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
  </script>
  <script type="text/javascript">
  try {
  var pageTracker = _gat._getTracker("UA-4556641-7");
  pageTracker._trackPageview();
  } catch(err) {}</script>
<? }
add_filter ('thematic_after', 'analytic_footer');

function childtheme_menu_args($args) {
    $args = array(
        'show_home' => 'Blog',
        'menu_class' => 'menu',
        'echo' => true
    );
	return $args;
}
add_filter('wp_page_menu_args', 'childtheme_menu_args');

function childtheme_abovemainasides() { ?>

  <div id="childtheme_feeds" class="aside child-main-aside">
    <ul class="xoxo vertical-feeds">
      <li><a href="http://itunes.apple.com/WebObjects/MZStore.woa/wa/viewPodcast?id=79511655"><img src="<?php bloginfo('siteurl'); ?>/wp-content/themes/web20show/images/feed_itunes.png" /></a></li>
      <li><a href="http://feeds.feedburner.com/web20Show"><img src="<?php bloginfo('siteurl'); ?>/wp-content/themes/web20show/images/feed_rss.png" /></a></li>
      <li><a href="http://twitter.com/web20show"><img src="<?php bloginfo('siteurl'); ?>/wp-content/themes/web20show/images/feed_twitter.png" /></a></li>
    </ul>
  </div>

<? }
add_filter('thematic_abovemainasides', 'childtheme_abovemainasides');

function childtheme_belowmainasides() { ?>

  <div id="childtheme_primary" class="aside child-main-aside">
    <ul class="xoxo vertical-ads">
      <li><a href="https://handcrafted.freshbooks.com/signup/"><img src="http://www.freshbooks.com/images/banners/freshbooks125x125.gif" /></a></li>
      <li><a href="http://www.highriseHQ.com/?referrer=HANDCRAFTED"><img alt="Highrise" border="0" height="125" src="https://affiliates.37signals.com/images/products/highrise/banner-125x125.png" width="125" /></a></li>
      <li><a href="http://www.backpackIT.com/?referrer=HANDCRAFTED"><img alt="Backpack" border="0" height="125" src="https://affiliates.37signals.com/images/products/backpack/banner-125x125.png" width="125" /></a></li>
      <li><a href="http://www.basecampHQ.com/?referrer=HANDCRAFTED"><img alt="Basecamp" border="0" height="125" src="https://affiliates.37signals.com/images/products/basecamp/banner-125x125.png" width="125" /></a></li>
    </ul>
  </div>

<? }
add_filter('thematic_belowmainasides', 'childtheme_belowmainasides');

?>