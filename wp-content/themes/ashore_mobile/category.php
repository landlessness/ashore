<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="post-single">
      <div class="category"><span class="icon-<?php foreach(get_the_category() as $category) {
        echo $category->slug . ' ';} ?>"></span><?php the_category(' '); ?> </div>
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="post-meta">
          <?php if(get_field('advertisement') == 'yes') { ?><div class="ad">ADVERTISEMENT</div><?php } else { ?>
            <div class="authorInfo">By <span class="author"><?php the_author(); ?></span></div>
            <div><span class="date"><?php the_time('F j, Y'); _e(' at '); the_time();?></span> <span class="postLocation"><?php the_field('location'); ?></span></div>
          </div>
          <?php } ?>
        </div><!--.postMeta -->
      </div><!--.post-single-->
    </div>
    <?php if ( has_post_thumbnail() ) { ?> <div class="featured-thumbnail"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div><?php } ?>
    <div class="divider"><img src="<?php bloginfo( 'template_url' ); ?>/images/squiggle.png" alt=" " /></div>
  <?php endwhile; ?>
  <?php $queryCategory = get_category(get_query_var('cat'),false); ?>
  <section id="ajax-load-more">
    <div class="listing" data-path="<?php echo get_template_directory_uri().'/ajax-load-more'; ?>" data-post-type="post" data-scroll="false" data-category="<?php echo $queryCategory->slug; ?>" data-display-posts="<?php echo get_option('posts_per_page'); ?>" data-button-text="Load More"></div>
  </section>
<?php else: ?>
  <div class="container">
    <div class="no-results">
      <p><strong><?php _e('The content you have requested is not available.'); ?></strong></p>
      <p>If you have an idea or suggestion for content, please <a href="/contact-us/" >contact us.</a></p>
				
    </div><!--noResults-->
  </div>
<?php endif; ?>

<?php get_footer(); ?>