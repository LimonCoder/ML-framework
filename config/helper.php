<?php

use Jenssegers\Blade\Blade;


function app($c = null){

    $object =  Containers::getInstence();

    if (is_null($c)) {
        return   $object;
    }else{
        return $object[$c];

    }
}

function view($path, $data = []){
    $blade = new Blade('views', 'cache');

    echo $blade->make($path, $data)->render();

}



?>