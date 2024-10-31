<?php
/**
 * @package All-Things-SEO.com
 * @author Michael Henke
 * @version 1.3.1
 */
/*
Plugin Name: SEO Friendly Social Links
Plugin URI: http://www.all-things-seo.com/seo/seo-friendly-social-links/
Description: Insert SEO friendly/neutral links to social networks and bookmarking services. This plugin is proudly provided by <a href="http://www.all-things-seo.com" target="_blank">all-things-seo.com</a>.
Version: 1.3.1
Author: Michael Henke
Author URI: http://www.all-things-seo.com/
 */

add_action('admin_menu', 'seo_friendly_social_links_init');

function seo_friendly_social_links_init() {
    add_submenu_page( 'options-general.php', __('SEO Social Links'), __('SEO Social Links'), 'manage_options', 'seo-friendly-social-links/seo-friendly-social-links.php', 'render');
}

function render() {

    add_option("selectedSEOfriendlyLinks", array());
    add_option("delimeterSEOfriendlyLinks", "|");
    add_option("prefixSEOfriendlyLinks", "<strong>Share this:</strong>");
    add_option("postfixSEOfriendlyLinks", "");
    add_option("methodSEOfriendlyLinks", "auto");
    add_option("feedSEOfriendlyLinks", "0");
    add_option("positionSEOfriendlyLinks", "ending");

    echo "<div class=\"wrap\">";
    include('settings-template.php');
    echo "</div>";
}

if (!is_admin()) {
    add_filter('the_content', 'insert_seo_friendly_links',99);
}

if (!function_exists('AllThingsSEO_widget_setup')) {

    if (is_admin()) {
        add_action('wp_dashboard_setup', 'AllThingsSEO_widget_setup' );
    }

    function AllThingsSEO_widget_setup() {
        wp_enqueue_script('newscript', plugins_url('/SEOrss_ajax.js', __FILE__), array('jquery'), '1.0' );
        wp_add_dashboard_widget("AllThingsSEO_feed", apply_filters( 'AllThingsSEO_feed_title', __( 'All-Things-SEO.com Tips & Tricks' ) ), "AllThingsSEO_widget" );
    }

    function AllThingsSEO_widget() {
        include_once 'widget.php';
    }
}

function insert_seo_friendly_links($post) {
    if (is_feed()) {
        if (get_option('feedSEOfriendlyLinks')) {
            if (get_option('positionSEOfriendlyLinks')=="beginning") {
                $post = the_seo_friendly_links().$post;
            } else {
                $post .= the_seo_friendly_links();
            }
        }
    } else {
        if (get_option('methodSEOfriendlyLinks')=="auto") {
            if (get_option('positionSEOfriendlyLinks')=="beginning") {
                $post = the_seo_friendly_links().$post;
            } else {
                $post .= the_seo_friendly_links();
            }
        }
    }

    return $post;

    
}

function the_seo_friendly_links() {
    global $seoServices;

    include_once 'services.php';
    $retval = "";

    $delimeter = get_option('delimeterSEOfriendlyLinks');
    $prefix = get_option('prefixSEOfriendlyLinks');
    $postfix = get_option('postfixSEOfriendlyLinks');

    $d = 0;
    foreach ($seoServices as $service) {
        if (in_array($service->name, get_option('selectedSEOfriendlyLinks'))) {

            if ($d++ > 0) $retval .= " ".trim($delimeter)." ";
            ob_start();
            eval("?>".$service->link."");
            $retval .= ob_get_contents();
            ob_clean();
        }
    }
    return "<span class=\"SEOfriendlySocialLinks\">".$prefix." ".$retval.$postfix."</span>";
}