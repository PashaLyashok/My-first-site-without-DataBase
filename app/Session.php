<?php 

namespace App;

final class Session extends Form {

    function __construct($login, $password) {

        if(!empty($login)) $this->login = $login;
        if(!empty($password)) $this->password = $password;

    }

    
}