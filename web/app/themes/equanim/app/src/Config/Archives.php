<?php

namespace App\Config;

class Archives {

	public static function register()
	{
		add_action('template_redirect', array(get_called_class(), 'remove_wp_archives'));
	}

	public static function remove_wp_archives()
	{
		if(is_category() || is_tag() || is_date() || is_author()) {
			global $wp_query;
			$wp_query->set_404();
		}
	}

}