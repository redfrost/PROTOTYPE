<div class="newslist <?php echo roots_row_class(); ?>">
<div class="main <?php echo roots_main_class(); ?>" role="main">
	<?php	// Get Posts in Category except first. 
	global $post;
	$args = array( 'numberposts' => 6, 'offset'=> 1, 'category' => 1 );  //Post Number, Offset (Exclude post), Category number 
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) :	setup_postdata($post); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    	
    	<header>
		<a href="<?php the_permalink(); ?>" class="list-thumbnail"><?php the_post_thumbnail('thumbnail'); ?>
</a>
		</header>
		
		<div class="entry-content listbox">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<span class="updated">Date Posted: <?php the_time('j/m/y g:i A') ?></span>
		  	<p><?php the_excerpt(); ?></p>
		</div>
	</article>	
	<?php endforeach; ?>
      
       
   <!-- Page navigation -->
  	<div id="post-nav">
  	<a href="../category/news/"> » View all news</a>
  	</div>
  	
    </div>
      <!-- Sidebar -->      
      <?php if (roots_display_sidebar()) : ?>
      <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
</div>