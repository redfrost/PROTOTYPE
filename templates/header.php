<header class="banner header-standard" role="banner">
  <div class="<?php echo roots_container_class(); ?>">
    <h1 class="site-title"><a class="brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
    <h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>

        <nav class="nav-main nav-hover-box" role="navigation">
        
        <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills nav-hover'));
            endif;
        ?>
            
        <?php
            if ( current_theme_supports('header-searchform')) {
            get_search_form();
            } else {    }
        ?>  
            
        </nav>
        
  </div>
</header>