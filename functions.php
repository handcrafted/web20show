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
      <li><a href="http://feeds.feedburner.com/web20Show"><img src="<?php echo bloginfo('stylesheet_directory') ?>/images/feed_rss.png" /></a></li>
      <li><a href="http://twitter.com/web20show"><img src="<?php echo bloginfo('stylesheet_directory') ?>/images/feed_twitter.png" /></a></li>
    </ul>
  </div>

<? }
add_filter('thematic_abovemainasides', 'childtheme_abovemainasides');

function childtheme_belowmainasides() { ?>

  <div id="childtheme_primary" class="aside child-main-aside">
    <ul class="xoxo vertical-ads">
      <li>
        <script type="text/javascript">
        Vertical1242735 = false;
        ShowAdHereBanner1242735 = true;
        RepeatAll1242735 = false;
        NoFollowAll1242735 = false;
        BannerStyles1242735 = new Array(
            "a{display:block;font-size:11px;color:#888;font-family:verdana,sans-serif;margin:0 4px 10px 0;text-align:center;text-decoration:none;overflow:hidden;}",
            "img{border:0;clear:right;}",
            "a.adhere{color:#666;font-weight:bold;font-size:12px;border:1px solid #ccc;background:#e7e7e7;text-align:center;}",
            "a.adhere:hover{border:1px solid #999;background:#ddd;color:#333;}"
        );
        document.write(unescape("%3Cscript src='"+document.location.protocol+"//s3.buysellads.com/1242735/1242735.js?v="+Date.parse(new Date())+"' type='text/javascript'%3E%3C/script%3E"));
        </script>
      </li>
      <li><a href="https://handcrafted.freshbooks.com/signup/"><img src="http://www.freshbooks.com/images/banners/freshbooks125x125.gif" /></a></li>
      <li><a href="http://www.highriseHQ.com/?referrer=HANDCRAFTED"><img alt="Highrise" border="0" height="125" src="https://affiliates.37signals.com/images/products/highrise/banner-125x125.png" width="125" /></a></li>
      <!-- <li><a href="http://graphicriver.net?ref=handcrafted"><img alt="GraphicRiver" border="0" height="125" src="http://envato.s3.amazonaws.com/referrer_adverts/gr_125x125_v1.gif" width="125" /></a></li> -->
      <li><a href="http://www.basecampHQ.com/?referrer=HANDCRAFTED"><img alt="Basecamp" border="0" height="125" src="https://affiliates.37signals.com/images/products/basecamp/banner-125x125.png" width="125" /></a></li>
    </ul>
  </div>

<? }
add_filter('thematic_belowmainasides', 'childtheme_belowmainasides');

function childtheme_favicon() { ?>
  <link rel="shortcut icon" href="<? echo bloginfo('stylesheet_directory') ?>/images/favicon.png">
<? }
add_action('wp_head', 'childtheme_favicon');

?>