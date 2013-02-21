<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<div class="<?php echo roots_container_class(); ?>">
<?php get_template_part('templates/section', 'news-banner'); ?>
</div>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <div class="breadcrumbs">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
    </div>

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
    <?php 
    switch(LAYOUT_STYLE) {
    
      case "1" : //Content 1.DEFAULT
        get_template_part('templates/section-base-sidebar-right');
        break;
    
      case "2" : //Content 2.LEFT SIDEBAR
        get_template_part('templates/section-base-sidebar-left');
        break;
    
      case "3" : //Content 3.SINGLE COLUMN
        get_template_part('templates/section-base-1col');
        break;
    
      case "4":  //Content 4.THREE COLUMNS
        get_template_part('templates/section-base-3col');
        break;
    
        }
    ?>

 
</div><!-- /.wrap -->

<?php get_template_part('templates/footer'); ?>
