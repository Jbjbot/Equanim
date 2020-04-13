<?php

namespace App\Config;

use App\PostTypes\Mediator;
use App\PostTypes\Team;

class CustomPostTypes {

    public static function register()
    {
        add_action( 'init', array(get_called_class(), 'arguments') );
    }

    public static function arguments()
    {
        register_post_type(
            Mediator::postType(),
            [
                'labels' => [
                    'name' => __('Médiateurs'),
                    'singular_name' => __('Médiateurs'),
                    'add_new_item' => __('Ajouter un médiateur'),
                    'menu_name' => __('Médiateurs'),
                    'name_admin_bar' => __('Médiateur'),
                    'all_items' => __('Tous les Médiateurs'),
                    'add_new' => __('Ajouter'),
                    'edit_item' => __('Modifier le médiateur'),
                    'view_item' => __('Voir le médiateur'),
                    'view_items' => __('Voir les Médiateurs'),
                    'search_items' => __('Rechercher un médiateur'),
                    'not_found' => __('Aucun médiateur trouvé.'),
                    'not_found_in_trash' => __('Not found in Trash'),
                ],
                'public' => true,
                'publicly_queryable' => true,
                'has_archive' => true,
                'supports' => [
                    'title',
                    'editor',
                    'thumbnail'
                ],
                'taxonomies' => [
                    'category'
                ],
                'rewrite' => [
                    'slug' => 'mediateur',
                ],
                'show_in_nav_menus' => true,
                'show_in_rest' => true,
                'rest_base' => 'mediateur',
                'rest_controller_class' => 'WP_REST_Posts_Controller',
                'menu_icon' => 'dashicons-businessman',
                'menu_position' => 21
            ]
        );

        register_post_type(
            Team::postType(),
            [
                'labels' => [
                    'name' => __('Équipe'),
                    'singular_name' => __('Équipe'),
                    'add_new_item' => __('Ajouter un membre de l\'équipe'),
                    'menu_name' => __('Équipe'),
                    'name_admin_bar' => __('Équipe'),
                    'all_items' => __('Tous les membres de l\'équipe'),
                    'add_new' => __('Ajouter'),
                    'edit_item' => __('Modifier le membre'),
                    'view_item' => __('Voir le membre'),
                    'view_items' => __('Voir les membres de l\'équipe'),
                    'search_items' => __('Rechercher un membres de l\'équipe'),
                    'not_found' => __('Aucun membres de l\'équipe trouvé.'),
                    'not_found_in_trash' => __('Not found in Trash'),
                ],
                'public' => true,
                'publicly_queryable' => true,
                'has_archive' => true,
                'supports' => [
                    'title',
                    'editor',
                    'thumbnail'
                ],
                'taxonomies' => [
                    'category'
                ],
                'rewrite' => [
                    'slug' => 'equipe',
                ],
                'show_in_nav_menus' => true,
                'show_in_rest' => true,
                'rest_base' => 'equipe',
                'rest_controller_class' => 'WP_REST_Posts_Controller',
                'menu_icon' => 'dashicons-groups',
                'menu_position' => 22
            ]
        );
    }

}