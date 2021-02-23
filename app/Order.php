<?php

namespace App;

use App\Form as ClassForm;

class Order {

    private static $path_json = './json/data.json';

    static function get_order() {


        $order = new ClassForm($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['product']);

        $ser_order = serialize($order);

        $data_array = [];

        if(file_exists(self::$path_json)) {

            $file_data = file_get_contents(self::$path_json);
            $data_array = json_decode($file_data, true);
        }

        if(!is_array($data_array)) {
            $data_array = [];
        }

        if(array_search($ser_order, $data_array) === false) {
            array_push($data_array, $ser_order);
        }

        if(count($data_array) > 0) {
            file_put_contents(self::$path_json, json_encode($data_array));
            
            return true;
        }

        return false;
    }

}

