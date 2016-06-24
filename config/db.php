<?php

// if the instance is local
if (getenv('APP_ENV') == 'local') {
    return [
        'server' => getenv('DB_HOST'),
        'database' => getenv('DB_NAME'),
        'user' => getenv('DB_USER'),
        'password' => getenv('DB_PASS'),
        'tablePrefix' => getenv('DB_PREFIX'),
    ];
}

// assume we are in staging/production

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

return [
    'server' => $url['host'],
    'database' => substr($url["path"], 1),
    'user' => $url["user"],
    'password' => $url["pass"],
    'tablePrefix' => 'craft',
];
