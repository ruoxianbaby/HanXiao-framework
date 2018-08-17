<?php

namespace hanxiao;

class Base
{
    public function __get($name){
        if (method_exists($this, 'get' . $name)) {
            $method = 'get' . $name;
            return $this->$method();
        } else {
            return new \ErrorException($name . 'not found');
        }
    }
}