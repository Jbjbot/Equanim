<?php

namespace App\Config;

class ThemeSupport {

    public static function register()
    {
        add_action( 'after_setup_theme', array( get_called_class(), 'theme_supports' ) );
    }

    public static function theme_supports()
    {

        /*
         * Part of conceal mu-plugin
         *
         */
        add_theme_support('conceal-disable-menu', [
            'edit-comments.php', // comments
            //'index.php', // dashboard
            //'upload.php', // media
            //'plugins.php', // plugins
            //'edit.php?post_type=acf-field-group', // Custom post type
            'tools.php?page=wp-migrate-db', // Plugin in Tools
            'options-general.php?page=menu_editor', // Plugin in Settings
            //'admin.php?page=wpseo_dashboard', // Plugin in menu root
            'admin.php?page=email-log', // Email log
            'link-manager.php', // Link
            'tools.php', // Tools
            'themes.php?page=theme-editor.php', // Editor
            //'themes.php?page=themes.php', // Themes
            'options-general.php?page=nested-pages-settings', // Nested pages
            'options-general.php?page=privacy.php', // Privacy
            'options-general.php?page=options-discussion.php', // Discussion
        ]);

        add_theme_support('conceal-disable-dashboard', [
            'dashboard_activity',
            'dashboard_incoming_links',
            'dashboard_plugins',
            'dashboard_primary',
            'dashboard_quick_press',
            'dashboard_recent_comments',
            'dashboard_recent_drafts',
            'dashboard_secondary',
            'dashboard_right_now',
            'email_log_dashboard_widget'
        ]);

        /*
         * Enable support for Post Formats.
         *
         * @links https://codex.wordpress.org/Post_Formats
         */
        add_theme_support(
            'post-formats', array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'audio',
            )
        );


        add_theme_support( 'menus' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        // Default featured imae dimensions
        // set_post_thumbnail_size( 1568, 9999 );
        set_post_thumbnail_size( 0, 0 );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 190,
                'width'       => 190,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        // Disable font-size customization
        add_theme_support('disable-custom-font-sizes');

        // Add custom editor font sizes.
        add_theme_support(
            'editor-font-sizes',
            array(
                array(
                    'name'      => __( 'Small', 'jb' ),
                    'shortName' => __( 'S', 'jb-starter-theme' ),
                    'size'      => 14,
                    'slug'      => 'small',
                ),
                array(
                    'name'      => __( 'Normal', 'jb' ),
                    'shortName' => __( 'M', 'jb-starter-theme' ),
                    'size'      => 16,
                    'slug'      => 'normal',
                ),
                array(
                    'name'      => __( 'Large', 'jb' ),
                    'shortName' => __( 'L', 'jb-starter-theme' ),
                    'size'      => 20,
                    'slug'      => 'large',
                ),
                array(
                    'name'      => __( 'Huge', 'jb' ),
                    'shortName' => __( 'XL', 'jb-starter-theme' ),
                    'size'      => 36,
                    'slug'      => 'huge',
                ),
            )
        );
    }

}