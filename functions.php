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

function childtheme_betweenmainasides() { ?>

  <div id="childtheme_primary" class="aside child-main-aside">
    <ul class="xoxo vertical-ads">
      <li><img src="http://assets0.fusionads.net/pathfinder_2.jpg" /></li>
      <li><img src="http://assets0.fusionads.net/culturedcode-things-fusion.jpg" /></li>
      <li><img src="http://assets0.fusionads.net/fusionads_sale_1.jpg" /></li>
      <li><img src="http://assets0.fusionads.net/mailchimp_2.png" /></li>
      <li><img src="http://assets0.fusionads.net/cornerstone-ad-change.png" /></li>
    </ul>
  </div>

<? }
add_filter('thematic_belowmainasides', 'childtheme_betweenmainasides');

?>