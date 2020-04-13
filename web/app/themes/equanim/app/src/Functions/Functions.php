<?php

namespace App\Functions;

class Functions {

    public function __construct()
    {
        // *** Remove tag
        remove_action('wp_head', 'wp_generator');

        // *** Remove version js and css
        add_filter( 'style_loader_src', array( get_called_class(), 'vc_remove_wp_ver_css_js'), 9999 );
        add_filter( 'script_loader_src', array( get_called_class(), 'vc_remove_wp_ver_css_js'), 9999 );

        // *** Delete windows live writer
        remove_action('wp_head', 'wlwmanifest_link');

        // *** Remove version from rss
        add_filter('the_generator', array( get_called_class(), 'wpt_remove_version') );

        // *** Remove default rss
        remove_all_actions( 'do_feed_rss2' );

        // *** Disable XMLRPC
        add_filter('xmlrpc_enabled', '__return_false');
        remove_action('wp_head', 'rsd_link');

        // *** Disable heartbeat API
        add_action( 'init', array( get_called_class(), 'stop_heartbeat'), 1 );

        // *** hide admin message
        add_action( 'admin_head', array( get_called_class(), 'hide_update_msg_non_admins') );

        // *** Activate widget menu link
        add_filter( 'pre_option_link_manager_enabled', '__return_true' );

        // *** Add new rss
        add_action( 'do_feed_rss2', array( get_called_class(), 'feed'), 10, 1);
    }

    /** Returns a custom logo markup
     *
     * @return bool
     */
    public static function get_the_custom_logo()
    {
        if(function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            return $custom_logo_id;
        }
        return false;
    }

    public static function hide_update_msg_non_admins()
    {
        echo '<style>#setting-error-tgmpa>.update-nag, .updated, .notice.is-dismissible { display: none; }</style>';
    }

    public static function wpt_remove_version()
    {
        return '';
    }

    public static function stop_heartbeat()
    {
        global $pagenow;

        if ( 'post.php' != $pagenow && 'post-new.php' != $pagenow )
            wp_deregister_script('heartbeat');
    }

    public static function vc_remove_wp_ver_css_js($src)
    {
        if (strpos( $src, 'ver=' . get_bloginfo( 'version' )))
            $src = remove_query_arg( 'ver', $src );
        return $src;
    }

    public static function feed()
    {
        load_template( TEMPLATEPATH . '/feed-rss2.php');
    }

    public static function language_switcher()
    {
        $languages = apply_filters('wpml_active_languages', NULL, 'orderby=id&order=desc' );
        return $languages;
    }

}