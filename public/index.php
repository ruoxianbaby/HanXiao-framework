<?php
/**
 *  项目入口文件
 */

define('DEBUG', true);
define('APP_PATH', dirname(__DIR__));

require APP_PATH . '/hanxiao/autoload_register.php';
$config = require APP_PATH . '/application/config.php';

$hanxiao = new hanxiao\Hanxiao($config);
$hanxiao->run();

