<?php
/**
 *  项目入口文件
 */

define('DEBUG', 1);
define('APP_PATH', __DIR__);

require APP_PATH . '/hanxiao/hanxiao.php';

$hanxiao = new Hanxiao();
$hanxiao->run();
