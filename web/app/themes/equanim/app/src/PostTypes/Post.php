<?php

namespace App\PostTypes;

use Timber\PostQuery;
use Timber\Timber;
use Timber\Post as TimberPost;

class Post extends TimberPost {

    protected static $postType = 'post';

    /**
     *
     * Get all posts of this type
     *
     * @param array $args
     * @return array    Array of Post object
     */
    public static function all($args = null)
    {
        $args = is_array($args) ? $args : [];

        $args = array_merge($args, [
            'post_type' => static::$postType,
            'post_status' => 'publish',
            'posts_per_page' => isset($args['posts_per_page']) ? $args['posts_per_page'] : -1,
            'orderby' => isset($args['orderby']) ? $args['orderby'] : 'post_date',
            'order' => isset($args['order']) ? $args['order'] : 'DESC'
        ]);

        return static::posts($args);
    }

    public static function query()
    {
        return new PostQuery();
    }

    /**
     *
     * Query posts
     *
     * @param null $args
     * @return array|bool|null
     */
    public static function posts($args = null)
    {
        return Timber::get_posts($args, get_called_class());
    }

    /**
     *
     * Return the type of post
     *
     * @return string
     */
    public static function postType()
    {
        return static::$postType;
    }

}