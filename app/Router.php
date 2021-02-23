<?php

namespace APP;

use App\Controllers\Main as Controller;

abstract class Router {

    static function start() {
        
        $path = $_REQUEST['path'];
        $path = array_filter(explode('/', $path));
        

        if(!empty($path[0])) {
            $path = $path[0];
        } else {
            $path = 'home';
        } 
        
        Controller::on($path);
        
    }
}