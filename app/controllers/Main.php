<?php

namespace App\Controllers;

use App\Models\Main as ModelMain;
use App\Models\Services as ModelServices;
use App\Views\Main as View;
use App\Views\Page as ViewPage;
use App\Views\Page404 as View404;

abstract class Main {

    static function on ($path) {

        $data = ModelServices::get($path);

        if(!empty($path) && ModelMain::check($path) == 'main') {
            View::render($path);
        } else if(!empty($path) && ModelMain::check($path) == 'services'){
            ViewPage::render($data);
        } else {
            View404::render();
        }
    }
}