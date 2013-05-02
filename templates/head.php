<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">

<!--
|~)[~|~\|~|~)/~\(~~|~
|~\[_|_/|~|~\\_/_) | 
When you look into an abyss, the abyss also looks into you. 
-->   

<!-- Site info -->  
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo SITE_DESC; ?>">
    <meta name="author" content="<?php echo SITE_AUTHOR; ?>">
    <meta name="publisher" content="<?php echo SITE_PUBLISHER; ?>"/>
    <meta name="keywords" content="<?php echo SITE_KEYWORDS; ?>">  


<!-- Favicon & Touch icon -->
  <?php if (current_theme_supports('child-url')) { ?>  
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png"><!-- Gloss -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/apple-touch-icon.png"><!-- Matt -->
  <? } else { ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png"><!-- Gloss -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png"><!-- Matt -->  
  <?php } ?>


<!-- For Mobile View Responsive On/Off -->
  <?php if (current_theme_supports('bootstrap-responsive')) { ?>   
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <? } else { ?><meta name="viewport" content="width=<?php echo STATIC_WIDTH_VALUE; ?>" />  
  <?php } ?>
  
<!-- Font -->
<?php if (TYPEKIT_ID) : ?>
	<script type="text/javascript" src="//use.typekit.net/<?php echo TYPEKIT_ID; ?>.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php endif; ?>

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>


<?php if (current_theme_supports('bootstrap-responsive')) { ?>   
<body <?php body_class(); ?> style="max-width:<?php echo WIDTH_VALUE; ?>px;" data-spy="">
<? } else { ?>
<body <?php body_class(); ?> data-spy="">
<?php } ?>
  
  <!--[if lt IE 9]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>
  
  
<div id="master_wrap">
