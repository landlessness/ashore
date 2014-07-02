<div class="container">
    <div class="post-single">
        <div class="category"><span class="icon-<?php foreach(get_the_category() as $category) {
echo $category->slug . ' ';} ?>"></span><?php the_category(' '); ?> </div>
        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        <div class="post-meta">
        
        <?php if(get_field('advertisement') == 'yes') { ?><div class="ad">ADVERTISEMENT</div><?php } else { ?>
            By <span class="author"><?php the_author(); ?></span> - <span class="date"><?php the_time('F j, Y'); _e(' at '); the_time();?></span> <span class="postLocation"><?php the_field('location'); ?></span>
         <?php } ?>
        </div><!--.postMeta-->
    </div><!--.post-single-->
</div>
<?php if ( has_post_thumbnail() ) { ?> <div class="featured-thumbnail"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a></div><?php } ?>
<div class="container post-content">
    <?php the_excerpt(); ?>
</div>
<div class="divider"><img src="<?php bloginfo( 'template_url' ); ?>/images/squiggle.png" alt=" " /></div>