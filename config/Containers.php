<?php

class Containers{
    
    protected static $instance;

    public static function setContainer(Pimple\Container $container)
    {
        self::$instance = $container;
    }

    public static function getInstence(){
        return self::$instance;
    }


}

?>