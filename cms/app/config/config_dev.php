<?php

return CMap::mergeArray(
    require(ROOT_DIR . '/app/config/config.php'),
    array(
        'modules' => array(
            'gii' => array(
                'class' => 'system.gii.GiiModule',
                'password' => 'admin'
            ),
        ),
        'components' => array(
            'urlManager' => array(
                'showScriptName' => true,
                'rules' => require(ROOT_DIR . '/app/config/routing_'.APPLICATION.'.php'),
            ),
            'log' => array(
                'routes' => array(
                    array(
                        'class'=>'vendor.malyshev.yii-debug-toolbar.YiiDebugToolbarRoute',
                        // Access is restricted by default to the localhost
                        //'ipFilters'=>array('127.0.0.1','192.168.1.*', 88.23.23.0/24),
                    ),
                    // uncomment the following to show log messages on web pages
                    /*
                    array(
                        'class'=>'CWebLogRoute',
                    ),
                    */
                ),
            ),
            'db' => array(
                'enableProfiling' => true,
                'enableParamLogging' => true,
            ),
        )
    )
);