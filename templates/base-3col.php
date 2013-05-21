<div class="threecolumns">    
<div class="content <?php echo roots_row_class(); ?>">

      <div class="main span6" role="main">
        <?php include roots_template_path(); ?>
      </div>

      <aside class="sidebar1 span3" role="complementary">
        <?php dynamic_sidebar('sidebar-primary'); ?>
      </aside>

      <aside class="sidebar2 span3" role="complementary">
        <?php dynamic_sidebar('sidebar-secondary'); ?>
      </aside>
    
</div><!-- /.content -->
</div><!-- /.threecolumns -->

