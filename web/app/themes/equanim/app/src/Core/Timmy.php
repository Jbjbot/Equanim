<?php

namespace App\Core;

use Timber\Timber;

class Timmy extends \Timmy\Timmy {

	public static function register()
	{
		// init Timmy lib
		new \Timmy\Timmy();

		add_filter( 'intermediate_image_sizes_advanced', array(get_called_class(), 'unsetDefaultThumbnailDimensions'));
		add_filter( 'timmy/sizes', array(get_called_class(), 'setImageSizes'));
	}

	public static function unsetDefaultThumbnailDimensions($sizes)
	{
		unset( $sizes['small']); // 150px
		unset( $sizes['medium']); // 300px
		unset( $sizes['large']); // 1024px
		unset( $sizes['medium_large']); // 768px
		return $sizes;
	}

	public static function setImageSizes( $sizes )
	{
		return array(
			'logo' => array(
				'resize' => array(250),
				'srcset' => array(.5, 1.5),
				'sizes' => '(min-width: 992px) 100vw, 50vw',
				'show_in_ui' => false,
			),
			'banner' => array(
				'resize' => array(2040, 720, 'center'),
				'srcset' => array(.3, .5, 2),
				'sizes' => '(min-width: 992px) 100vw, (min-width: 768px) 50vw, 30vw',
				'show_in_ui' => false,
			),
			'illustration' => array(
				'resize' => array(520, 275, 'center'),
				'srcset' => array(.3, .5),
				'sizes' => '(min-width: 992px) 100vw, 50vw',
				'name' => 'Width 1/2 fix',
				'post_types' => array( 'post', 'page' ),
			),
			'article-thumbnail' => array(
				'resize' => array( 370, 250, 'center' ),
				'srcset' => array( .5, 1.5 ),
				'sizes' => '(min-width: 992px) 25vw, 100vw',
			),
			'mediator-thumbnail' => array(
				'resize' => array(270, 146, 'center'),
				'srcset' => array( .5, 1.5 ),
				'sizes' => '(min-width: 992px) 33.333vw, 100vw',
			),
		);
	}

}