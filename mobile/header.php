<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php echo wp_title(''); ?></title>
	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width,initial-scale=1"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
  
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/MyFontsWebfontsKit.css" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/theme.css" />
	
    <script type="text/javascript">// <![CDATA[
		jQuery(document).ready(function($){
		/* toggle nav */
		$(".location").on("click", function(){
			$("#nav-primary").slideToggle();
			$(this).toggleClass("active");
		});
		$("#search").on("click", function(){
			$(".searchArea").slideToggle();
			$(this).toggleClass("active");
		});
		
       $("#topContainer").scrollLeft($('li.current-menu-item').offset().left - 115);   
  
	});
// ]]></script>
</head>

<body>
<div id="main"><!-- this encompasses the entire Web site -->
	<div id="header"><header>
    	<div class="wrapper">
		<div class="container">
			<div id="title">
					<h1 id="logo"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/ashore-logo.png" alt="ashore" /></a></h1>
			</div><!--#title-->
            <div class="location"><span><?php bloginfo('name'); ?></span></div>
            <div id="search">
            	<span class="icon-search"></span>
            </div>
			<div class="clear"></div>
		</div><!--.container-->
        
	</header></div><!--#header--><div class="clear"></div>
    <div class="searchArea">
    	<?php get_search_form(); ?>
    </div>
	<div id="nav-primary" class="nav"><nav>
				<?php {
				     wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); 
				} ?><div class="clear"></div>
			</nav></div><!--#nav-primary-->
   </div>
   <div class="navContainer">
        <div class="allPosts">
            <a <?php if(is_home()){?>class="active" <?php } ?> href="<?php bloginfo('url'); ?>/">All Posts</a>
        </div>
       <div id="topContainer">
            <div id="categoryNavTop">
               <?php wp_nav_menu( array('theme_location' => 'category-footer-menu' )); /* editable within the Wordpress backend */ ?><div class="clear"></div>
            </div>
       </div>
   </div>
