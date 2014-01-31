<?php

return CMap::mergeArray(
    require(ROOT_DIR . '/app/config/config.php'),
    array(
        'components' => array(
            'urlManager' => array(
                'rules' => require(ROOT_DIR . '/app/config/routing_'.APPLICATION.'.php'),
            )
        )
    )
);