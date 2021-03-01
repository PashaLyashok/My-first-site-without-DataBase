<?php

namespace App;

    class Form {

        protected $data = [];

        function __construct($name, $email, $phone, $product) {
            
            if(!empty($name) && $name != '') $this->name = $name;
            if(!empty($email) && $email != '') $this->email = $email;
            if(!empty($phone) && $phone != '') $this->phone = $phone;
            if(!empty($product) && $product != '') $this->product = $product;
        }

        function add($data) {
            if(!empty($data) || count($data) > 0) $this->data = $data;
        }

        function get() {
            return $this->data;
        }
    }
    