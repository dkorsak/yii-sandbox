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

	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'admin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters' => array('127.0.0.1','::1'),
		),
	),

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
		// uncomment the following to enable URLs in path-format
		'urlManager' => array(
			'urlFormat' => 'path',
			'showScriptName' => false,
			'rules' => CMap::mergeArray(
			    require(ROOT_DIR . '/app/config/routing_'.APPLICATION.'.php'),
    			array(
                )
    	    ),
		),
		'db' => array(
		    CMap::mergeArray(
		        $params['database'],
		        array(
    			    'emulatePrepare' => true,
                )
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
	),
);