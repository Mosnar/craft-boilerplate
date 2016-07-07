<?php

$redis = parse_url(getenv('REDIS_URL'));

return [

    'hostname' => $redis['host'],
    'username' => $redis['user'],
    'port' => $redis['port'],
    'password' => $redis['pass'],
    'database' => 0,
    'timeout' => null,
];
