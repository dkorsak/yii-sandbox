<?php

define('ROOT_DIR', realpath(__DIR__ . '/../'));

# If we have autoloader from Composer, use it.
if (file_exists(ROOT_DIR . '/vendor/autoload.php')) {
    require ROOT_DIR . '/vendor/autoload.php';
}

$yii = ROOT_DIR . '/vendor/yiisoft/yii/framework/yii.php';
require_once($yii);

Yii::setPathOfAlias('vendor', ROOT_DIR . '/vendor');