<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// 定义 BASE_PATH
define('BASE_PATH', __DIR__);

// BASE URL
$config = require BASE_PATH.'/config/config.php';
define('BASE_URL', $config['base_url']);

// TIME_ZONE
date_default_timezone_set($config['time_zone']);

//Autoload 自动载入
require BASE_PATH.'/vendor/autoload.php';

// View Loader
// class_alias('\TinyLara\TinyView\TinyView','View');

// Eloquent ORM
$capsule = new Capsule;
$capsule->addConnection(require BASE_PATH.'/config/database.php');
$capsule->bootEloquent();

// whoops 错误提示
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();