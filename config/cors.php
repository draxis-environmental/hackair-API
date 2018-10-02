<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Laravel CORS
     |--------------------------------------------------------------------------
     |

     | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
     | to accept any value.
     |
     */

    //'supportsCredentials' => false,
    //'allowedOrigins'      => ['*'],
    //'allowedHeaders'      => ['Content-Type', 'Accept'],
    //'allowedMethods'      => ['GET', 'POST', 'PUT', 'DELETE'],
    //'exposedHeaders'      => [],
    //'maxAge'              => 0,
    //'hosts'               => [],

    'supportsCredentials' => false,
    'allowedOrigins'      => ['*'],
    'allowedHeaders'      => ['*'],
    'allowedMethods'      => ['*'],
    'exposedHeaders'      => ['*'],
    'maxAge'              => 0,
    'hosts'               => [],

];