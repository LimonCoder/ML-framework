<?php

namespace mlframework\Controller;

class HomeController {

    private static $instance;

    public static function getInstance(){
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function index(){
        echo "limon";
    }

    public function create(){
        echo "hasif";
    }

}




?>