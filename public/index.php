<?php
/**
 *  项目入口文件
 */

define('DEBUG', true);
define('APP_PATH', dirname(__DIR__));

require APP_PATH . '/hanxiao/autoload.php';
require APP_PATH . '/hanxiao/Hanxiao.php';
$config = require APP_PATH . '/application/config.php';

$hanxiao = new hanxiao\Hanxiao($config);
$hanxiao->run();
