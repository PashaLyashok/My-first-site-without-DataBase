<?php

namespace App;

    class Form {

        protected $data = [];

        function __construct($name, $email, $phone, $product) {
            
           /*$this->add([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'product' => $product
            ]);*/
            if(!empty($name)) $this->name = $name;
            if(!empty($email)) $this->email = $email;
            if(!empty($phone)) $this->phone = $phone;
            if(!empty($product)) $this->product = $product;
        }

        function add($data) {
            if(!empty($data) || count($data) > 0) $this->data = $data;
        }

        function get() {
            return $this->data;
        }
    }
    