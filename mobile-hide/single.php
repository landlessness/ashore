<?php get_header(); ?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article>
        	<div class="container post-header">

            	<div class="category"><span class="icon-<?php foreach(get_the_category() as $category) {
echo $category->slug . ' ';} ?>"></span><?php the_category(' '); ?> </div>
				<h1><?php the_title(); ?></h1>

                <div class="post-meta">
                <?php if(get_field('advertisement') == 'yes') { ?><div class="ad">ADVERTISEMENT</div><?php } else { ?>
                    <div class="authorInfo">By <span class="author"><?php the_author(); ?></span></div>
                    <div><span class="date"><?php the_time('F j, Y'); _e(' at '); the_time();?></span> <span class="postLocation"><?php the_field('location'); ?></span></div>
                    <?php } ?>
                </div>
            </div>   
				<?php if ( has_post_thumbnail() ) { ?>
                    <div class="featured-thumbnail"><?php the_post_thumbnail(); ?></div> 
                    <div class="featuredCaption">                   
                            <q><?php the_field('featured_image_caption'); ?></q>
                    </div>
			    <?php } ?>
              
             <div class="container">
				<div class="post-content">
					<?php the_content(); ?>
				</div><!--.post-content-->
             </div>
		</article>
		
	<?php comments_template( '', true ); ?>
	<?php endwhile; /* end loop */ ?>

<?php get_footer(); ?>