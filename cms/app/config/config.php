<?php

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$params = require('parameters.php');

return array(
    'basePath' => ROOT_DIR . '/protected',
    'name'=>'Yii Framework Sandbox',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(),
    'behaviors' => array(
        'runEnd' => array(
            'class' => 'application.components.WebApplicationEndBehavior',
        ),
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array()
        ),
        'db' => CMap::mergeArray(
            $params['database'],
            array(
                'class'=>'CDbConnection',
                'emulatePrepare' => true,
            )
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                    )
                ),
            ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => CMap::mergeArray(
        $params['params'],
        array(
            'adminEmail' => 'webmaster@example.com',
        )
    )
);