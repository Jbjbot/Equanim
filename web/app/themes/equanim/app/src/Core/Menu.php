<?php

namespace App\Core;

use Timber\Menu as TimberMenu;

class Menu extends TimberMenu {

    public function __construct($slug)
    {
        return parent::__construct($slug);
    }

}