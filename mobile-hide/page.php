<?php get_header(); ?>

<div class="container">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div class="page-content">
			<article>
				<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
			</article>
		</div><!--#post-# .post-->



	<?php endwhile; ?>
</div><!--#content-->
<?php get_footer(); ?>
