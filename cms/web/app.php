<?php

define('APPLICATION', 'frontend');
define('ENV', 'prod');

require __DIR__.'/../app/bootstrap.php';

// change the following paths if necessary
$config = ROOT_DIR . '/app/config/config_'.ENV.'.php';

Yii::createWebApplication($config)->runEnd(APPLICATION);
