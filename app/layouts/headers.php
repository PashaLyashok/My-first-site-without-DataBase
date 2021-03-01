<?php
use App\Order as classOrder;
if(isset($_POST['order'])) {
    if(classOrder::get_order() == true) {
        header('Location: thanks');
        exit;
    }
}