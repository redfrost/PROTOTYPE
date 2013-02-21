<?php get_template_part('templates/head'); ?>

<!-- Featured banner on top -->
<?php get_template_part('templates/section', 'pagebanner'); ?>

<div class="wrap <?php echo roots_container_class(); ?>" role="document">

    <!-- Breadcrumb -->
    <?php get_template_part('templates/section', 'breadcrumb'); ?>
    
  

<!-- Content -->  
    <div id="content" class="row">

	  <!-- Main  -->
      <div id="main" class="span12" role="main">
        
        
			 <?php while (have_posts()) : the_post(); ?>
			  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			    <header>
			      <h1 class="entry-title"><?php the_title(); ?></h1>
			      <?php get_template_part('templates/entry-meta'); ?>
			    </header>
			    <div class="entry-content">
			      <?php the_content(); ?>
			    </div>
			    <footer>
			      <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
			      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
			    </footer>
			    <?php comments_template('/templates/comments.php'); ?>
			  </article>
			<?php endwhile; ?>
			
			
			<!-- Navigation -->
			<nav id="nav-single">
			<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span>', 'twentytwelve' ) . ' %title' ); ?></span>
			
			<span class="nav-next"><?php next_post_link( '%link', '%title ' . __( '<span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></span>
			</nav><!-- #nav-single -->


        
        
        
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
