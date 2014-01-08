<?php

define('APPLICATION', 'backend');

require __DIR__.'/../app/bootstrap.php';

// change the following paths if necessary
$config = ROOT_DIR . '/app/config/config_prod.php';

Yii::createWebApplication($config)->runEnd(APPLICATION);
