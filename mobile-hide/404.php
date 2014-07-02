<?php get_header(); ?>
	<div class="error404">
    	<div class="container">
		<h1>404</h1>
			Oops.<br />
			Sorry, The Droid You Are Looking For Does Not Exist!
		</div><!--#error404 .post-->
    </div>
    <div class="popularPosts"><?php if (function_exists('wpp_get_mostpopular')) wpp_get_mostpopular(); ?></div>
<?php get_footer(); ?>