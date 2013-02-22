    <div class="content <?php echo roots_row_class(); ?>">

      <div class="main span12" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->

      <!-- Sidebar -->      
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar bottom span12" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
      
    </div><!-- /.content -->