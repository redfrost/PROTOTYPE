<?php

/**
 * Enable theme features
 */
//add_theme_support('root-relative-urls');    // Enable relative URLs
//add_theme_support('rewrites');              // Enable URL rewrites
add_theme_support('h5bp-htaccess');         // Enable HTML5 Boilerplate's .htaccess
//add_theme_support('bootstrap-top-navbar');  // Enable Bootstrap's top navbar
add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]
add_theme_support('nice-search');           // Enable /?s= to /search/ redirect
add_theme_support('bootstrap-responsive'); // On/Off Responsive Mobile view
//add_theme_support('bootstrap-responsive-max'); //Responsive Large Desktop view
add_theme_support('bootstrap-test'); // On/Off Test mode


/**
 * Configuration values
 */
define('GOOGLE_ANALYTICS_ID', ''); // UA-XXXXX-Y
define('TYPEKIT_ID', 'mng3caa'); // ADOBE TYPEKIT ID
define('POST_EXCERPT_LENGTH', 40);



/**
 * .main classes
 */
function roots_main_class() {
  if (roots_display_sidebar()) {
    // Classes on pages with the sidebar
    $class = 'span8';
  } else {
    // Classes on full width pages
    $class = 'span12';
  }

  return $class;
}

/**
 * .sidebar classes
 */
function roots_sidebar_class() {
  return 'span4';
}


/**  
 * Responsive-Max Class change
 */
function roots_container_class() {
  if (current_theme_supports('bootstrap-responsive-max')) {
    $class = 'container-fluid';
  } else {
    $class = 'container';
  }
  return $class;
}
function roots_row_class() {
  if (current_theme_supports('bootstrap-responsive-max')) {
    $class = 'row-fluid';
  } else {
    $class = 'row';
  }
  return $class;
}

/**
 * Define which pages shouldn't have the sidebar
 *
 * See lib/sidebar.php for more details
 */
function roots_display_sidebar() {
  $sidebar_config = new Roots_Sidebar(
    /**
     * Conditional tag checks (http://codex.wordpress.org/Conditional_Tags)
     * Any of these conditional tags that return true won't show the sidebar
     *
     * To use a function that accepts arguments, use the following format:
     *
     * array('function_name', array('arg1', 'arg2'))
     *
     * The second element must be an array even if there's only 1 argument.
     */
    array(
      'is_404',
      'is_front_page'
    ),
    /**
     * Page template checks (via is_page_template())
     * Any of these page templates that return true won't show the sidebar
     */
    array(
      'page-custom.php',
      'page-fullwidth.php',
      'page-featured.php',
      'page-product.php'
    )
  );

  return $sidebar_config->display;
}

/**
 * $content_width is a global variable used by WordPress for max image upload sizes
 * and media embeds (in pixels).
 *
 * Example: If the content area is 640px wide, set $content_width = 620; so images and videos will not overflow.
 * Default: 940px is the default Bootstrap container width.
 */
if (!isset($content_width)) { $content_width = 960; }
