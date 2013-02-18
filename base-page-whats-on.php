<?php get_template_part('templates/head'); ?>
  
<!-- Main banner Carousel -->  
<div class="whats-on <?php echo roots_row_class(); ?>">
<div class="span12 banner">
<div id="myCarousel-auto" class="carousel carousel-fade slide page_banner_imgbox">
 <div class="carousel-inner">
 
  <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'news', 
    'posts_per_page' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
  
   <div class="item active">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large');?></a>
    <div class="carousel-caption page_banner_textbox">
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     <p><?php the_excerpt();?></p>
    </div>
   </div><!-- item active -->
   
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
  <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'news', 
    'posts_per_page' => 5, 
    'offset' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
  
   <div class="item">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large');?></a>
    <div class="carousel-caption page_banner_textbox">
     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
     <p><?php the_excerpt();?></p>
    </div>
   </div><!-- item -->
   
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
  
 </div><!-- carousel-inner -->
 <a class="left carousel-control" href="#myCarousel-auto" data-slide="prev">‹</a>
 <a class="right carousel-control" href="#myCarousel-auto" data-slide="next">›</a>
  
 
</div><!-- #myCarousel -->
</div><!-- /.span12 -->
</div><!-- Main banner Carousel -->


  <div class="wrap <?php echo roots_container_class(); ?> whats-on" role="document">

    <!-- Breadcrumb -->
    <div class="breadcrumbs">
      <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
    </div>
  

<!-- Content -->  
<div class="content <?php echo roots_row_class(); ?>">


	  <!-- Main  -->
      <div id="main" class="<?php echo roots_main_class(); ?>" role="main">
       
   
   
    <h2>Latest News &amp; Event</h2>
	<?php	// Get Posts in Category except first. 
	global $post;
	$args = array( 'numberposts' => 6, 'offset'=> 1, 'category' => 1 );  //Post Number, Offset (Exclude post), Category number 
	$myposts = get_posts( $args );
	foreach( $myposts as $post ) :	setup_postdata($post); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    	
    	<header>
		<a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail(array(150,150)); ?></a>
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

    
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>