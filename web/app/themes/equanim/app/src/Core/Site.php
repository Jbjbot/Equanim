<?php

namespace App\Core;

use App\Config\Yoast;
use App\Core\Menu;
use App\Functions\Functions;
use Timber\Site as TimberSite;
use Timber\TextHelper;

class Site extends TimberSite {

    public function __construct()
    {
        add_filter( 'timber/context', array( $this, 'add_to_context' ) );
        add_filter( 'timber/twig', array( $this, 'add_to_twig' ) );
        parent::__construct();
    }

    /**
     *
     * @param string $context context['this'] Being the Twig's {{ this }}.
     * @return array
     */
    public function add_to_context($context)
    {
        // functions to determine the type of content
        $context['is_home'] = is_home();
        $context['is_front_page'] = is_front_page();
        $context['is_logged_in'] = is_user_logged_in();
        $context['is_archive'] = is_archive();
        $context['is_single'] = is_single();

        // register variables to timber context
        $context['site'] = $this;
        $context['logo'] = Functions::get_the_custom_logo();
        $context['menu'] = new Menu('main-menu');
        $context['menu_footer'] = new Menu('footer-menu');

        $context['wpml'] = Functions::language_switcher();

        $context['yoast'] = Yoast::doesItActivated();
        return $context;
    }

    /** This is where you can add your own functions to twig.
     *
     * @param string $twig get extension.
     * @return array
     */
    public function add_to_twig( $twig )
    {
        $twig->addExtension( new \Twig_Extension_StringLoader() );
        $twig->addFilter( new \Twig_SimpleFilter('myTruncate', array($this, 'excerpt')));
        return $twig;
    }

    /**
     *
     * @param $text
     * @param int $num_words
     * @param null $more
     * @param string $allowed_tags
     * @return string
     */
    public function excerpt($text, $num_words = 25, $more = null, $allowed_tags = 'p a span b i br blockquote')
    {
        return TextHelper::trim_words($text, $num_words, $more, $allowed_tags);
    }

}