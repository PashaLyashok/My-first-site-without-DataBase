<?php 

namespace App\Models;

abstract class Main {
    
    static function check($path) {

        $array_nav = ['home','about','services','prices', 'contacts','form'];
        $array_services = ['services-editable', 'services-download', 'services-design', 'services-responsive'];

        $main_path = in_array($path, $array_nav);
        $services_path = in_array($path, $array_services);

        if($main_path != false) {
            return 'main';
        } else if($services_path != false){
            return 'services';
        } else {
            return false;
        }

        
    }
}