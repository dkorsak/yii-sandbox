<?php

define('APPLICATION', 'backend');
define('ENV', 'prod');

require __DIR__.'/../app/bootstrap.php';

$config = ROOT_DIR . '/app/config/config_'.ENV.'.php';

Yii::createWebApplication($config)->runEnd(APPLICATION);
