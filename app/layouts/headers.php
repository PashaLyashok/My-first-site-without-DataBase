<?php
use App\Order as classOrder;
if(isset($_POST['order'])) {
    classOrder::get_order();
    header('Location: form');
    exit;
}