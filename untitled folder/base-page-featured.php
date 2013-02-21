<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<?php get_template_part('templates/section', 'pagebanner'); ?>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <div class="breadcrumbs">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
    </div>
  
    <!-- Content -->  



</div><!-- /.wrap -->

<?php get_template_part('templates/footer'); ?>


