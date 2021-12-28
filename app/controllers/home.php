<?php

namespace App\Controllers;

class Home {

    public static function index() {
        $a = \App\Models\Usuarios::read_one(['id' => 1]);
        \Core\Engines::set('data', $a);
        \Core\Engines::render();
    }

}
