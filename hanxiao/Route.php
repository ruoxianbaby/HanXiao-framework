<?php
namespace hanxiao;

use hanxiao\Base;
use hanxiao\Request;
use hanxiao\Hanxiao;

class Route extends Base
{
    public function __construct()
    {
        $this->defaultRoute = Hanxiao::$config['defaultRoute'];
        # code... 根据 default controller 去计算当前路由
    }

    private function getRoute(){

    }
}