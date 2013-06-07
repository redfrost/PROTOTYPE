<?php

function roots_scripts() {
  wp_enqueue_style('roots_bootstrap', get_template_directory_uri() . '/assets/css/base.css', false, null);
  if (current_theme_supports('bootstrap-responsive')) {
 
    wp_enqueue_style('roots_bootstrap_responsive_style', get_template_directory_uri() . '/assets/css/responsive.css', array('roots_bootstrap'), null);
    wp_enqueue_style('roots_bootstrap_responsive_addon', get_template_directory_uri() . '/assets/css/responsive-addon.css', array('roots_bootstrap'), null);
  }

  if (current_theme_supports('bootstrap-test')) {
    wp_enqueue_style('roots_bootstrap_test', get_template_directory_uri() . '/assets/css/test.css', array('roots_bootstrap'), null);
  }

  wp_enqueue_style('roots_app', get_template_directory_uri() . '/assets/css/style.css', false, null);


  // Load style.css from child theme
  if (is_child_theme()) {
    wp_enqueue_style('roots_child', get_stylesheet_uri(), false, null);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_plugins', get_template_directory_uri() . '/assets/js/script.js', false, null, true);
  wp_register_script('roots_main', get_template_directory_uri() . '/assets/js/custom.js', false, null, true);
  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('roots_main');
}

add_action('wp_enqueue_scripts', 'roots_scripts', 100);


function roots_google_analytics() { ?>
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','<?php echo GOOGLE_ANALYTICS_ID; ?>');ga('send','pageview');
</script>

<?php }
if (GOOGLE_ANALYTICS_ID) {
  add_action('wp_footer', 'roots_google_analytics', 20);
}
