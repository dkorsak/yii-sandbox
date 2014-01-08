<?php

return CMap::mergeArray(
    require(ROOT_DIR . '/app/config/config.php'),
    array(
        // Put dev settings there.
    )
);