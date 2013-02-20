<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<?php get_template_part('templates/section', 'pagebanner'); ?>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <?php get_template_part('templates/section', 'breadcrumb'); ?>
    
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
