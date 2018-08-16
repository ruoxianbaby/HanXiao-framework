<?php
namespace hanxiao;

class Hanxiao
{
    public function __construct($config)
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
        
    }

}
