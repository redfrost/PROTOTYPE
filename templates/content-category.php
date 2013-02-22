<?php if (!have_posts()) : ?>
    <div class="alert">
	    <?php _e('Sorry, no results were found.', 'roots'); ?>	
	</div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>

  <?php if (current_theme_supports('postbox')) { ?><!-- On/Off Postbox style --> 
  <article class="span3 postbox">
  <? } else { ?>
  <article <?php post_class(); ?>>
  <?php } ?>

    <header>
	<div class="list-thumbnail-box"><a href="<?php the_permalink(); ?>" class="list-thumbnail"><?php the_post_thumbnail('thumbnail'); ?>
</a></div>
	</header>
		
		<div class="entry-content listbox">
			<div class="list"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<span class="updated">Date Posted: <?php the_time('j/m/y g:i A') ?></span>
		  	<p><?php the_excerpt(); ?></p>
		  	<!-- <a class="btn btn-mini" href="<?php the_permalink(); ?>">&raquo; Read More</a> -->
		  	</div>
		</div>
    <footer>
      <?php the_tags('<ul class="entry-tags"><li>','</li><li>','</li></ul>'); ?>
    </footer>
    
  </article>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav id="post-nav" class="pager">
    <?php wp_simple_pagination(); ?>
  </nav>
<?php endif; ?>
