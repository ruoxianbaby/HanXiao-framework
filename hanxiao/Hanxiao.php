<?php
namespace hanxiao;

use hanxiao\Base;

class Hanxiao extends Base
{
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

    }

}
