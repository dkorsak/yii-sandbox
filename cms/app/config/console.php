<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.

return CMap::mergeArray(
    require(ROOT_DIR . '/app/config/config.php'),
    array(
        'name'=>'Yii Sandbox Console Application',
        'commandPath' => ROOT_DIR . '/protected/commands',
        // application components
        'components' => array(
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                    )
                )
            )
        )
    )
);