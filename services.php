<?php

/*
 * See customServices_example.php for introductions on how to add your own service definitions.
 */

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    include_once 'Service4.php';
} else {
    include_once 'Service.php';
}

global $seoServices;

$seoServices[] = new SEOSocialService("Twitter", '<a href="http://twitter.com/share?text=<?=urlencode(get_the_title()); ?>&amp;url=<?=urlencode(get_permalink()); ?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');
$seoServices[] = new SEOSocialService("StumbleUpon", '<a href="http://www.stumbleupon.com/submit?url=<?=urlencode(get_permalink()); ?>&amp;title=<?=urlencode(get_the_title()); ?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');
$seoServices[] = new SEOSocialService("Facebook", '<a href="http://www.facebook.com/sharer.php?u=<?=urlencode(get_permalink());?>&amp;t=<?=urlencode(get_the_title()); ?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');
$seoServices[] = new SEOSocialService("Delicious", '<a href="http://www.delicious.com/save?v=5&amp;noui&amp;jump=close&amp;url=<?=urlencode(get_permalink()) ;?>&amp;title=<?=urlencode(get_the_title());?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');
$seoServices[] = new SEOSocialService("digg",'<a href="http://digg.com/submit?url=<?=urlencode(get_permalink()) ;?>&amp;title=<?=urlencode(get_the_title());?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');
$seoServices[] = new SEOSocialService("reddit", '<a href="http://reddit.com/submit?url=<?=urlencode(get_permalink()); ?>&amp;title=<?=urlencode(get_the_title()); ?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');
$seoServices[] = new SEOSocialService("buzz", '<a href="http://www.google.com/buzz/post?url=<?=urlencode(get_permalink());?><?php
   if ( has_post_thumbnail() ) {
      $thumb = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
      echo "&amp;imageurl=".urlencode($thumb);
   } ?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');

$seoServices[] = new SEOSocialService("Mr. Wong", '<a href="http://www.mister-wong.de/index.php?action=addurl&amp;bm_url=<?php echo get_permalink() ?>&amp;bm_description=<?php the_title(); ?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');
$seoServices[] = new SEOSocialService("eMail", '<a href="mailto:?subject=<?php the_title(); ?>&nbsp;<?php echo get_permalink()?>&amp;body=<?php the_title(); ?>&nbsp;<?php echo get_permalink()?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');
/* $seoServices[] = new SEOSocialService("LinkedIn", '<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=urlencode(get_permalink()); ?>&amp;title=<?=urlencode(get_the_title()); ?>&amp;&source=<?=urlencode(bloginfo(\'name\')); ?>&amp;summary=<?=urlencode(get_the_excerpt(FALSE));?>" rel="nofollow" target="_blank"><?=$service->name;?></a>'); */
$seoServices[] = new SEOSocialService("LinkedIn", '<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?=urlencode(get_permalink()); ?>&amp;title=<?=urlencode(get_the_title()); ?>&amp;source=<?=urlencode(bloginfo(\'name\')); ?>" rel="nofollow" target="_blank"><?=$service->name;?></a>');

$file = dirname(__FILE__)."/customServices.php";

if (file_exists($file)) {
    include_once $file;
}