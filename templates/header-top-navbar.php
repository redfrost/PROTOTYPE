<header class="banner navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="<?php echo roots_container_class(); ?>">

    <div class="navbar-width" style="max-width:<?php echo WIDTH_VALUE; ?>px;">

      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      
       <!-- Logo Image -->
    <?php if (current_theme_supports('custom_logo')) { ?>   
    
    	<img alt="<?php bloginfo('name'); ?>" src="<?php echo LOGO_PATH; ?>" style="max-width:<?php echo LOGO_WIDTH; ?>px;">
    	<img alt="<?php bloginfo('name'); ?>" src="<?php echo LOGO_PATH; ?>">
    	</a>
        
    <? } else { ?>

        <!-- Logo Image -->
        <a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>

    <?php } ?>   
      
      
      
      
      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>

    </div>
  </div>
</header>
