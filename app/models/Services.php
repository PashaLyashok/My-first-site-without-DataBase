<?php 

namespace App\Models;

abstract class Services {
    
       static private $data_services = [
           
        'services-editable' => '<h2>Fully Editable</h2>
                                <hr/>
                                <img class="company" src="/img/company.png" alt="photo_company"/>
                                <p class="serv">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ratione et fugiat quisquam ipsam nulla eum commodi expedita neque ad pariatur, beatae maiores! Dolorum dicta aspernatur autem illo voluptates cupiditate ipsam recusandae harum consectetur tempore quae nulla similique delectus reiciendis, molestias nemo maxime ea ipsa assumenda perspiciatis aliquid alias? Tempora?</p>
                                <button class="button_serv"><a class="a_serv" href="services"><<- Back</a></button>',
        'services-download' => '<h2>Free Download</h2>
                                <hr/>
                                <img class="company" src="/img/company.png" alt="photo_company"/>
                                <p class="serv">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ratione et fugiat quisquam ipsam nulla eum commodi expedita neque ad pariatur, beatae maiores! Dolorum dicta aspernatur autem illo voluptates cupiditate ipsam recusandae harum consectetur tempore quae nulla similique delectus reiciendis, molestias nemo maxime ea ipsa assumenda perspiciatis aliquid alias? Tempora?</p>
                                <button class="button_serv"><a class="a_serv" href="services"><<- Back</a></button>',
        'services-design'   => '<h2>Modern Design</h2>
                                <hr/>
                                <img class="company" src="/img/company.png" alt="photo_company"/>
                                <p class="serv">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ratione et fugiat quisquam ipsam nulla eum commodi expedita neque ad pariatur, beatae maiores! Dolorum dicta aspernatur autem illo voluptates cupiditate ipsam recusandae harum consectetur tempore quae nulla similique delectus reiciendis, molestias nemo maxime ea ipsa assumenda perspiciatis aliquid alias? Tempora?</p>
                                <button class="button_serv"><a class="a_serv" href="services"><<- Back</a></button>',
        'services-responsive' => '<h2>100% Responsive</h2>
                                <hr/>
                                <img class="company" src="/img/company.png" alt="photo_company"/>
                                <p class="serv">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ratione et fugiat quisquam ipsam nulla eum commodi expedita neque ad pariatur, beatae maiores! Dolorum dicta aspernatur autem illo voluptates cupiditate ipsam recusandae harum consectetur tempore quae nulla similique delectus reiciendis, molestias nemo maxime ea ipsa assumenda perspiciatis aliquid alias? Tempora?</p>
                                <button class="button_serv"><a class="a_serv" href="services"><<- Back</a></button>'
    ];
    
    static function get($path) {

        if(!empty($path)) {

            foreach (self::$data_services as $key => $value) {
                if ($path === $key) {
                    return $value;
                }
            }
        }
    }

}