<?php

namespace hanxiao;

use hanxiao\Base;

class Request extends Base
{
    public static function post($param = null, $defaultValue = null)
    {
        if ($param == null) return $_POST;
        if (isset($_POST[$param])) {
            return $_POST[$param];
        } else {
            if ($defaultValue == null) {
                return null;
            } else {
                return $defaultValue;
            }
        }
    }
}
