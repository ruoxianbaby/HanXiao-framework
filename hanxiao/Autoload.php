<?php

class autoload
{
    public static function register($class)
    {
        require APP_PATH . '/' . $class . '.php';
    }

}
