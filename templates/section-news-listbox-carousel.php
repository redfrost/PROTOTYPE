<div class="carousel-box <?php echo roots_row_class(); ?>">
<div class="span12">

    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
     
            <div class="item active">
            <ul class="thumbnails">
                    
                        
      <?php 
       $the_query = new WP_Query(array(
        'category_name' => 'news', 
        'posts_per_page' => 6 
        )); 
       while ( $the_query->have_posts() ) : 
       $the_query->the_post();
      ?>  

                    
              <li class="span2">
                <div class="thumbnail">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                            
               <div class="caption">
                 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                 <p><?php the_excerpt();?></p>
                 <a class="btn btn-mini" href="<?php the_permalink(); ?>">&raquo; Read More</a>
               </div>                          
              </li>
       
                   
      <?php 
       endwhile; 
       wp_reset_postdata();
      ?>

            </ul>
            </div><!-- /Slide1 --> 



            <div class="item">
            <ul class="thumbnails">
      
      <?php 
       $the_query = new WP_Query(array(
        'category_name' => 'news', 
        'posts_per_page' => 6, 
        'offset' => 6 
        )); 
       while ( $the_query->have_posts() ) : 
       $the_query->the_post();
      ?>            
                        
              <li class="span2">
                <div class="thumbnail">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                            
               <div class="caption">
                 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                 <p><?php the_excerpt();?></p>
                 <a class="btn btn-mini" href="<?php the_permalink(); ?>">&raquo; Read More</a>
               </div>                          
              </li>
                        
      <?php 
       endwhile; 
       wp_reset_postdata();
      ?>                        
                        
            </ul>
            </div><!-- /Slide2 --> 
             
                        
            <div class="item">
            <ul class="thumbnails">
            
            
       <?php 
       $the_query = new WP_Query(array(
        'category_name' => 'news', 
        'posts_per_page' => 6, 
        'offset' => 12 
        )); 
       while ( $the_query->have_posts() ) : 
       $the_query->the_post();
      ?>              
                       
              <li class="span2">
                <div class="thumbnail">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                            
               <div class="caption">
                 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                 <p><?php the_excerpt();?></p>
                 <a class="btn btn-mini" href="<?php the_permalink(); ?>">&raquo; Read More</a>
               </div>                          
              </li>
              
      <?php 
       endwhile; 
       wp_reset_postdata();
      ?>            
          
                        
            </ul>
            </div><!-- /Slide3 --> 
            
             
            
        </div><!-- /.carousel-inner -->

        <div class="control-box">                            
            <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
        </div><!-- /.control-box --> 
        
        
    </div><!-- /#myCarousel -->

</div><!-- /.span12 -->          
</div><!-- /.row --> 
