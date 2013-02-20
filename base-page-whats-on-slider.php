<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<div class="<?php echo roots_container_class(); ?>">
<?php get_template_part('templates/section', 'news-banner-slider'); ?>
<?php get_template_part('templates/section', 'news-listbox-carousel'); ?>
<?php get_template_part('templates/section', 'news-listbox'); ?>
<?php get_template_part('templates/section', 'news-listbox2'); ?>
</div>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <?php get_template_part('templates/section', 'breadcrumb'); ?>

    <!-- Parent Page Header -->
    <div class="page-header">
        <h1>
        <?php
        if($post->post_parent) {
        $parent_title = get_the_title($post->post_parent);
        echo $parent_title.' &#8212; ';
        } ?>
        <?php wp_title(''); ?>
        </h1>
    </div>
      
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
