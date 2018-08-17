<?php
namespace hanxiao;

use hanxiao\Base;

class Hanxiao extends Base
{
    public static $config = [];
    public function __construct($config  = null)
    {
        $this->verify($config);
        $this->load($config);
    }

    public function run()
    {
        echo 'success';
    }

    private function verify($config)
    {

    }

    private function load($config)
    {
        self::$config = $config;
    }

    public static function getConfig($name = null)
    {
        if ($name == null) {
            return self::$config;
        } else {
            if (isset(self::$config[$name])) {
                return self::$config[$name];
            } else {
                throw new \Exception($name . 'can not found in config');
            }   
        }
    }

}
