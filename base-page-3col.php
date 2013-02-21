<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<?php get_template_part('templates/section', 'pagebanner'); ?>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <?php get_template_part('templates/section', 'breadcrumb'); ?>
    
  
<!-- Content -->  
<div id="threecolumn">
      <div class="main span6" role="main">
        <?php include roots_template_path(); ?>
      </div>

      <aside class="sidebar1 span3" role="complementary">
        <?php dynamic_sidebar('sidebar-primary'); ?>
      </aside>

      <aside class="sidebar2 span3" role="complementary">
        <?php dynamic_sidebar('sidebar-secondary'); ?>
      </aside>
</div>
    
    </div><!-- /#content -->
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>
</div><!-- /#master_wrap -->

<!-- iOS touch dropdown menu quickfix. Delete this later. -->
<script type='text/javascript'>
$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
</script>
</body>


</html>
