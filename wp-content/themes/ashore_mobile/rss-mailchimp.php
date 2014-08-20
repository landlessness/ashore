<?php
/*
Template Name: Mail Chimp Feed
*/

$numposts = 5;

function yoast_rss_date( $timestamp = null ) {
  $timestamp = ($timestamp==null) ? time() : $timestamp;
  echo date(DATE_RSS, $timestamp);
}

function yoast_rss_text_limit($string, $length, $replacer = '...') { 
  $string = strip_tags($string);
  if(strlen($string) > $length) 
    return (preg_match('/^(.*)\W.*$/', substr($string, 0, $length+1), $matches) ? $matches[1] : substr($string, 0, $length)) . $replacer;   
  return $string; 
}

$posts = query_posts('showposts='.$numposts);

$lastpost = $numposts - 1;

header("Content-Type: application/rss+xml; charset=UTF-8");
?><rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:media="http://search.yahoo.com/mrss/">
<channel>
  <title>Ashore Detroit Newsletter</title>
  <link>http://detroit.ashore.me/</link>
  <description>The Detroit water sports and lifestyle newsletter.</description>
  <language>en-us</language>
  <pubDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></pubDate>
  <lastBuildDate><?php yoast_rss_date( strtotime($ps[$lastpost]->post_date_gmt) ); ?></lastBuildDate>
  <managingEditor><?php bloginfo('admin_email'); ?> (Ashore <?php bloginfo('name'); ?>)</managingEditor>
  <?php while ( have_posts() ) : the_post(); ?>
       <item>
      <title><?php the_title(); ?></title>
      <link><?php the_permalink(); ?></link>
      <dc:creator><?php the_author(); ?></dc:creator>
      <media:content url="<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'mailchimp'); echo $image[0]; ?>" medium="image" />
      <description><?php echo '<![CDATA['.yoast_rss_text_limit(strip_shortcodes(get_the_content()), 250).']]>';  ?></description>
      <pubDate><?php yoast_rss_date( strtotime(get_the_date())); ?></pubDate>
      <guid><?php the_permalink(); ?></guid>
    </item>
  <?php endwhile; ?>
  </channel>
</rss>