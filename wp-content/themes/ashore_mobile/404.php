<?php get_header(); ?>
<div class="error404">
  <div class="container">
    <h1>404</h1>
    Oops.<br />
    The content you are looking for hasn't washed ashore.
  </div><!--#error404 .post-->
</div>

<div class="popularPosts">
  <h1>Popular Posts</h1>
  <?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular("stats_views=0"); ?>
</div>
<?php get_footer(); ?>