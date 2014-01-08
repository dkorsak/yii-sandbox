<?php

require __DIR__.'/../app/bootstrap.php';

// change the following paths if necessary
$config = dirname(__FILE__).'/../app/config/config_prod.php';

Yii::createWebApplication($config)->runEnd('frontend');
