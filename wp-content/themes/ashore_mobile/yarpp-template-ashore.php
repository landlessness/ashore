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
        </li>
      <?php endwhile; ?>
    </ul>
  <?php else: ?>
    <p>No related stories.</p>
  <?php endif; ?>
