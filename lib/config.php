<?php

// Enable theme features


// RELATIVE URL

//add_theme_support('root-relative-urls');    // Enable relative URLs
//add_theme_support('rewrites');              // Enable URL rewrites



// THEME FEATURES

//add_theme_support('bootstrap-top-navbar');  // Enable Bootstrap's top navbar
add_theme_support('bootstrap-responsive'); // On/Off Responsive Mobile view
add_theme_support('bootstrap-test'); // On/Off Test mode
add_theme_support('header-searchform'); // Display search form in header
//add_theme_support('postbox'); // Display list in box style (4 boxes)

add_theme_support('bootstrap-gallery');     // Enable Bootstrap's thumbnails component on [gallery]
add_theme_support('nice-search');           // Enable /?s= to /search/ redirect




// CONFIGURATION

define('WIDTH_VALUE', '960'); // RESPONSIVE LAYOUT MAX CONTENT WIDTH VALUE 
define('STATIC_WIDTH_VALUE', '1050'); // STATIC LAYOUT MAX WIDTH VALUE FOR MOBILE (default = 1024)
define('JQUERY_VERSION', '1.8.3'); // Set jQuery CDN version
define('GOOGLE_ANALYTICS_ID', ''); // UA-XXXXX-Y
define('TYPEKIT_ID', 'wng7msj'); // ADOBE TYPEKIT ID
define('POST_EXCERPT_LENGTH', 40);
define('LAYOUT_STYLE', 1);
// CHOOSE LAYOUT STYLE: 
// 1.DEFAULT 
// 2.LEFT SIDEBAR 
// 3.SINGLE COLUMN 
// 4.THREE COLUMNS



 
// Header Information
define('SITE_DESC', 'Wordpress base template');  // Website description 
define('SITE_AUTHOR', 'Redfrost');  // Site owner
define('SITE_PUBLISHER', 'Massivesound');  // Site developer or publisher
define('SITE_KEYWORDS', 'wordpress');  //Search keywords




// main classes

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



// Responsive-Max Class change

function roots_container_class() {
  if (current_theme_supports('bootstrap-responsive')) {
    $class = 'container-fluid';
  } else {
    $class = 'container';
  }
  return $class;
}
function roots_row_class() {
  if (current_theme_supports('bootstrap-responsive')) {
    $class = 'row-fluid';
  } else {
    $class = 'row';
  }
  return $class;
}



// Define which pages shouldn't have the sidebar

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





