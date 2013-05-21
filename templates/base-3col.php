    <div id="threecolumn">
      <div class="main span6" role="main">
        <?php include roots_template_path(); ?>
      </div>

      <aside class="sidebar1 left span3" role="complementary">
        <?php dynamic_sidebar('sidebar-primary'); ?>
      </aside>

      <aside class="sidebar2 span3" role="complementary">
        <?php dynamic_sidebar('sidebar-secondary'); ?>
      </aside>
    </div><!-- /#threecolumn -->