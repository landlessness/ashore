<?php 
/*
YARPP Template: Ashore.me
Author: AMBR Detroit
*/
?><h3>Related Stories</h3>
<?php if (have_posts()):?>
<ul>
	<?php while (have_posts()) : the_post(); ?>
	<li>
	    <div class="category"><span class="icon-<?php foreach(get_the_category() as $category) {
        echo $category->slug . ' ';} ?>"></span><?php the_category(' '); ?> </div>
	    <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
	    By <span class="author"><?php the_author(); ?></span> - <span class="date"><?php the_time('F j, Y'); _e(' at '); the_time();?></span> <span class="postLocation"><?php the_field('location'); ?></span>
    </li>
	<?php endwhile; ?>
</ul>
<?php else: ?>
<p>No related stories.</p>
<?php endif; ?>
