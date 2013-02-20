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
