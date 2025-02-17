<?php

require_once( '../../../wp-admin/admin.php' );

require(ABSPATH . 'wp-admin/includes/dashboard.php' );

@header( 'Content-Type: ' . get_option( 'html_type' ) . '; charset=' . get_option( 'blog_charset' ) );
send_nosniff_header();

echo '<div class="rss-widget">';
wp_widget_rss_output( array(
	                        'link' => apply_filters( 'AllThingsSEO_feed_link',  __( 'http://www.all-things-seo.com/' ) ),
	                        'url' => apply_filters( 'AllThingsSEO_feed_feed',  __( 'http://www.all-things-seo.com/feed/' ) ),
	                        'title' => apply_filters( 'AllThingsSEO_feed_title', __( 'All-Things-SEO.com Tips & Tricks' ) ),
	                        'items' => 2,
	                        'show_summary' => 1,
	                        'show_author' => 0,
	                        'show_date' => 1,
	                )
        );
echo "</div>";

?>
<small>
    <a href="http://www.all-things-seo.com/feed/" target="_blank" rel="_nofollow"><span style="background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAYAAABWdVznAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHwSURBVHjaHJLPS1RRHMU/99437z1nfEmTNNkwRf4oBUPINtWisMA2BS3DTbjKaBlBq/4Co1oXtGkbgQoRCBFBtZOCNMIcyYacVJ7NjL15c9+73dfuu/mec/icI4wxrN8+aXTUQEoHkcQInYAC6TggBJAivQLlx8tCVGdGzN+9Jt6pyxTPXCXdXsPUVzA738jtVckV8ijfRaqEzaVdHB3WET0H8CqDuIcHEMfGcHsrmPAn8dJzVPUVUv9BuD56ZxlH5RxUlyJamqP+9TVStHH6BgnOTtN94S56dQzz8RGivYtQOWSWMU0j8qMT9E09oHhxBjcJaSzcYevNQ9TAJOLIeZLwF5g0ewC30AXJLlH4A29kkuL1ZwRD54jezdL4PIcavoZ2ejGdjgUjJIXAxavOE7+cpv70Cs3Vt3RP3MffXyFcnEXnS1Aax2hLLrE22kSo0gmC/tPk4xo78/dI0gR/fJpO+Bvd3MbsG8AogWy3NVFQpvvGAt7UAn55DNnYpLX2AW/okpUMbBcSeXAYHB+H1ObKKbIC/5eUCDyl6KwswvonZBTTfP+CZGODtG1LXb85aHqOW6vSKLmMWO0L7VaM1i66pe1t6MRWt7WHH9glZMobt/qN3qplwKyt3YSFZ5KEzNRkt05xioc4+uS7+CfAAJuxz+d4SoyCAAAAAElFTkSuQmCC);display: inline-block;width: 12px;height: 12px;">&nbsp;</span>
    Subscribe</a> to this feed |
    <a href="http://twitter.com/AllThingsSEOcom" target="_blank" rel="_nofollow"><span style="background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAMCAIAAADZF8uwAAAAAXNSR0IArs4c6QAAAURJREFUeJxkkDtLA0EUhc9s1iRuInamCJYBC0ETawt/iJbW+ju0sBARezuxs5GAjSC+ah+FigRThLia7IOdmXvHmd0UiofLZZj5OPfMFWdvYbf3NVUqASBAMzJGnFeiEQt/Y2FObN8PatNBJQgaZcxXcD3CUCMijDVGtkuO+u8+/DKqgTRYb6DqwQAnA0Q58a2hjKFk7Ftzj92bJazqJTQrSHzEhJtQGdJGKz9haIIxKLQ666rQ7gsfv2eW86Lc9lPjv5yNks7JBjQakicPRz06fE2LKa4z2YNnA4YKI0UF1Kpyp0adOq/MoI4cZcLyRdi5ytqX8a2N+VcHD8PF0+fW/rnHWrrBSu48jT9S+p3pMUzdOMNiqTso/jYJQRpEboS9tEtKYzXs+5tNsde9Y5nlBIHt0mx3BISw9NZa+wcAAP//AwCzbPKFHoCbQQAAAABJRU5ErkJggg%3D%3D);display: inline-block;width: 12px;height: 12px;">&nbsp;</span>
    Follow me</a> on Twitter |
    Visit <a href="http://www.all-things-seo.com/" target="_blank">All-Things-SEO.com</a>
</small>
