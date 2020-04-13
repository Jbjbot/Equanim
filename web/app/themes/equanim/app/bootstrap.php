<?php

namespace App;

use App\Config\Acf;
use App\Config\CustomPostTypes;
use App\Config\CustomTaxonomies;
use App\Config\ThemeSupport;
use App\Config\Widgets;
use App\Config\Archives;
use App\Core\Site;
use App\Core\Timmy;
use App\Functions\Assets;
use App\Functions\Functions;

require_once('autoload.php');

/*
 |--------------------------------------------------------------------------
 | Composer autoloader
 |--------------------------------------------------------------------------
 */

require_once( dirname( __FILE__, 6) . '/vendor/autoload.php');


/*
 |--------------------------------------------------------------------------
 | Core
 |--------------------------------------------------------------------------
 |
 | Load Timber
 |
 */

new Site();

Timmy::register();


/*
 |--------------------------------------------------------------------------
 | Config
 |--------------------------------------------------------------------------
 |
 | Load theme support
 | Register any custom post types
 | Register any custom taxonomies
 |
 */

ThemeSupport::register();

/** Todo :
 *
 * @link https://github.com/johnbillion/extended-cpts
 */

CustomPostTypes::register();

CustomTaxonomies::register();

Acf::register();

Widgets::register();

Archives::register();


/*
 |--------------------------------------------------------------------------
 | Assets
 |--------------------------------------------------------------------------
 |
 | Register stylesheets and scripts
 |
 */

Assets::register();

new Functions();


/*
 |--------------------------------------------------------------------------
 | Post Types Settings
 |--------------------------------------------------------------------------
 |
 |
 |
 */
