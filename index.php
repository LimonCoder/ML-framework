<?php

require_once 'vendor/autoload.php';

use Pimple\Container;
use  mlframework\Router;
use mlframework\Controller\HomeController;


$container = new Container();

$container['db'] = function(){

    return new Database(DB_TYPE,HOST_NAME,DB_NAME,DB_USERNAME,DB_PASSWORD);
};


Containers::setContainer($container);














?>