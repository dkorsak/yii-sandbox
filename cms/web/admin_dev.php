<?php

define('APPLICATION', 'backend');

ini_set('display_errors', true);
error_reporting(-1);

require __DIR__.'/../app/bootstrap.php';

// change the following paths if necessary
$config = ROOT_DIR . '/app/config/config_dev.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 3);

Yii::createWebApplication($config)->runEnd(APPLICATION);
