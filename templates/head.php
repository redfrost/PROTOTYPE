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
	<meta name="description" content="" />
	<meta name="author" content="">
	<meta name="publisher" content=""/>
	<meta name="keywords" content="">

<!-- Favicon & Touch icon -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png"><!-- Gloss -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png"><!-- Matt -->

<!-- For Mobile View Responsive On/Off -->
  <?php if (current_theme_supports('bootstrap-responsive')) { ?>   
  <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <? } else { ?><meta name="viewport" content="width=1025" />  
  <?php } ?>
  
<!-- Font -->
<?php if (TYPEKIT_ID) : ?>
	<script type="text/javascript" src="//use.typekit.net/<?php echo TYPEKIT_ID; ?>.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<?php endif; ?>

  <?php wp_head(); ?>

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
</head>
