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

?>