<?php

/**
 * Description of ajustes
 * @author ferncastillo
 */

namespace App\Controllers;

class Ajustes {
    public static function index() {
        
    }
    
    public static function perfiles() {
        \Core\Engines::render();
    }
    
    public static function permisos() {
        \Core\Engines::render();
    }
    
    public static function roles() {
        \Core\Engines::render();
    }
    
}
