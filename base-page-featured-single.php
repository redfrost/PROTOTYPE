<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<div class="<?php echo roots_container_class(); ?>">
    <?php get_template_part('template-sections/news-banner-single'); ?>
</div>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>

    <!-- Parent Page Header -->
    <div class="page-header">
        <h1>
        <?php wp_title(''); ?>
        </h1>
    </div>
      
    <!-- Content -->  
    <?php get_template_part('template-sections/news-list'); ?>
 
</div><!-- /.wrap -->

<?php get_template_part('templates/footer'); ?>
