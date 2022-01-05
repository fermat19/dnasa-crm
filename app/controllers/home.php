<?php

namespace App\Controllers;

class Home {

    public static function index() {
        \Core\Engines::render();
    }

}
