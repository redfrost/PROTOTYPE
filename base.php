<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<?php get_template_part('templates/section', 'pagebanner'); ?>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>
  
    <!-- Content -->  
    <?php 
    switch(LAYOUT_STYLE) {
    
      case "1" : //Content 1.DEFAULT
        get_template_part('templates/base-sidebar-right');
        break;
    
      case "2" : //Content 2.LEFT SIDEBAR
        get_template_part('templates/base-sidebar-left');
        break;
    
      case "3" : //Content 3.SINGLE COLUMN
        get_template_part('templates/base-1col');
        break;
    
      case "4":  //Content 4.THREE COLUMNS
        get_template_part('templates/base-3col');
        break;
    
        }
    ?>


</div><!-- /.wrap -->

<?php get_template_part('templates/footer'); ?>


