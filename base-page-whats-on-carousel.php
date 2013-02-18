<?php get_template_part('templates/head'); ?>
  
<!-- Main banner Carousel -->  
<?php get_template_part('templates/section', 'news-carousel'); ?>

<div class="wrap <?php echo roots_container_class(); ?> whats-on" role="document">

    <!-- Breadcrumb -->
    <div class="breadcrumbs">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
    </div> 

    <?php get_template_part('templates/page', 'header'); ?>
      
    <!-- Content -->  
    <div class="content <?php echo roots_row_class(); ?>">
      <div class="main <?php echo roots_main_class(); ?>" role="main">
      <?php get_template_part('templates/section', 'news-list'); ?>  
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
