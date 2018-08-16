<?php
namespace hanxiao;

use hanxiao\Base;

class Hanxiao extends Base
{
    public $config = [];
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
        $this->config = $config;
    }

    public function getConfig($name = null)
    {
        if ($name == null) {
            return $this->config;
        } else {
            if (isset($this->config[$name])) {
                return $this->config[$name];
            } else {
                throw new \Exception($name . 'can not found in config');
            }   
        }
    }

}
