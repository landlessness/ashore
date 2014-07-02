<?php get_header(); ?>
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="post-single">
      <div class="category"><span class="icon-<?php foreach(get_the_category() as $category) {
        echo $category->slug . ' ';} ?>"></span><?php the_category(' '); ?> </div>
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="post-meta">
          <?php if(get_field('advertisement') == 'yes') { ?><div class="ad">ADVERTISEMENT</div><?php }  ?>
        </div><!--.postMeta-->
      </div><!--.post-single-->
    </div>
    <?php if ( has_post_thumbnail() ) { ?> <div class="featured-thumbnail"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div><?php } ?>
    <div class="container post-content">
      <?php the_excerpt(); ?>
    </div>
    <div class="divider"><img src="<?php bloginfo( 'template_url' ); ?>/images/squiggle.png" alt=" " /></div>
  <?php endwhile; ?>
  <section id="ajax-load-more">
    <div class="listing" data-path="<?php echo get_template_directory_uri().'/ajax-load-more'; ?>" data-post-type="post" data-scroll="false" data-display-posts="<?php echo get_option('posts_per_page'); ?>" data-button-text="Load More"></div>
  </section>
<?php else: ?>
  <div class="container">
    <div class="no-results">
      <p><strong><?php _e('There has been an error.'); ?></strong></p>
      <p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
      <?php get_search_form(); /* outputs the default Wordpress search form */ ?>
    </div><!--noResults-->
  </div>
<?php endif; ?>
			


	
<?php get_footer(); ?>
