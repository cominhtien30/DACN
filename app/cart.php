<?php
namespace App;
    class cart{
        public $seat = null;
        public function __construct($cart)
        {
            if($cart){
                $this->seat = $cart->seat;
            }
        }

       

    }
?>