<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<?php get_template_part('template-sections', 'pagebanner'); ?>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <div class="breadcrumbs"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>
  

<!-- Content -->  
    <div class="content <?php echo roots_row_class(); ?>">

<!-- Main  -->
     <div class="main span12" role="main">
        
	<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?>>
   		<header>
      			<h1 class="entry-title"><?php the_title(); ?></h1>
      			<div class="meta-data">
      			<?php get_template_part('templates/entry-meta'); ?>
     		 	</div>
   		</header>
    		
		<div class="entry-content">
     		 <?php the_content(); ?>
    		</div>
    		
		<footer>
     			<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
     			<?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    		</footer>

   		<?php comments_template('/templates/comments.php'); ?>
 	</article>
	
	<?php endwhile; ?>

	<!-- Navigation -->
	<nav id="nav-single">
		<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span>' ) . ' %title' ); ?></span>
			
		<span class="nav-next"><?php next_post_link( '%link', '%title ' . __( '<span class="meta-nav">&rarr;</span>' ) ); ?></span>
	</nav><!-- #nav-single -->
        
      </div><!-- /.main -->
      

      <!-- Sidebar -->      
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar bottom span12" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>

    
    </div><!-- /#content -->
  </div><!-- /#wrap -->

  <?php get_template_part('templates/footer'); ?>


