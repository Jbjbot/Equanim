<?php

namespace App\Core;

class Search {

    /**
     * @return string
     */
    public static function searchForm()
    {
        $form = '<form role="search" method="get" class="searchform" action="' . esc_url( home_url( '/' ) ) . '">
				<input type="search" placeholder="' . esc_attr_x( 'Search &hellip;', 'placeholder' ) . '" value="' . get_search_query() . '" name="s" title="' . esc_attr_x( 'Search for:', 'label' ) . '" />
			</form>';

        return $form;
    }

}