<?php

return [

    'host'          => env('FORTNOX_HOST', 'https://api.fortnox.se/3/'),
    'client_id'     => env('FORTNOX_CLIENT_ID', ''),
    'client_secret' => env('FORTNOX_CLIENT_SECRET', ''),
    'refresh_token' => env('FORTNOX_REFRESH_TOKEN', ''),
    'timeout'       => env('FORTNOX_TIMEOUT', 5),

];
