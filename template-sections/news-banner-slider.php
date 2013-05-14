<div class="banner-slider <?php echo roots_row_class(); ?>">
<div class="span12">
<div id="myCarousel-auto" class="carousel carousel-fade slide page_banner_imgbox">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel-auto" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel-auto" data-slide-to="1"></li>
            <li data-target="#myCarousel-auto" data-slide-to="2"></li>
            <li data-target="#myCarousel-auto" data-slide-to="3"></li>
            <li data-target="#myCarousel-auto" data-slide-to="4"></li>
        </ol>

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
       		<a href="<?php the_permalink(); ?>">
        	<?php
        	   if (is_page()) {
        		   if (is_mobile()) {
        		   the_post_thumbnail('medium');
        		   } else {
        		   the_post_thumbnail('large');
        			}
        	} ?>
            </a>
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
    'posts_per_page' => 4, 
    'offset' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
  
   <div class="item">
       		<a href="<?php the_permalink(); ?>">
        	<?php
        	   if (is_page()) {
        		   if (is_mobile()) {
        		   the_post_thumbnail('medium');
        		   } else {
        		   the_post_thumbnail('large');
        			}
        	} ?>
            </a>
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
        <div class="control-box">       
            <a class="left carousel-control" href="#myCarousel-auto" data-slide="prev"><i class="icon-chevron-left"></i></a>
            <a class="right carousel-control" href="#myCarousel-auto" data-slide="next"><i class="icon-chevron-right"></i></a>        
        </div><!-- /.control-box -->   
  
 
</div><!-- #myCarousel -->
</div><!-- /.span12 -->
</div><!-- Main banner Carousel -->
