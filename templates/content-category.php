<?php if (!have_posts()) : ?>
    <div class="alert">
	    <?php _e('Sorry, no results were found.', 'roots'); ?>	
	</div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    	<header>
	<div class="list-thumbnail-box"><a href="<?php the_permalink(); ?>" class="list_thumbnail"><?php the_post_thumbnail(array(150,150)); ?></a></div>
	</header>
		
		<div class="entry-content listbox">
			<div class="list"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<span class="updated">Date Posted: <?php the_time('j/m/y g:i A') ?></span>
		  	<p><?php the_excerpt(); ?></p></div>
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
