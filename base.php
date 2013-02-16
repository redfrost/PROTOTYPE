<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> data-spy=""><!-- Scroll Spy disabled -->

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

 <!-- Featured banner on top -->
 <?php get_template_part('templates/page', 'pagebanner'); ?>

  <div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <div class="breadcrumbs">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
    </div>
    <!-- Content -->  
    <div class="content <?php echo roots_row_class(); ?>">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->

      <!-- Sidebar -->      
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>
</div><!-- /#master_wrap -->
<!-- iPad menu fix -->
<script type='text/javascript'>
$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
</script>
</body>
</html>
