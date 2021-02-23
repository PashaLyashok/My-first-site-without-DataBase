<?php

function get_nav() {

   global $html_nav;

    $nav_data = [
        'Home' => '/',
        'About Us' => 'about',
        'Our Services' => 'services',
        'Prices' => 'prices',
        'Contacts' => 'contacts'
    ];

    if(!empty($nav_data)) {
        
        foreach ($nav_data as $li => $href) {
            $html_nav .= '<li><a active href="'. $href .'">'. $li .'</a></li>' ;
        }

        return $html_nav;
    }
}
