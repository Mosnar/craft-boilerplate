<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

try {
    $dotenv = new Dotenv\Dotenv(dirname(__DIR__));
    $dotenv->load();
    $dotenv->required([
        'DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS', 'DB_PREFIX',
        'APP_ALLOW_UPDATES', 'APP_BACKUP_DB_ON_UPDATE', 'APP_CACHE_METHOD',
        'APP_BASE_PATH', 'APP_SITE_URL', 'APP_OMIT_SCRIPT', 'APP_IMAGE_QUALITY'
    ]);
} catch (Exception $e) {
    exit('Could not load the environment.');
}

// Path to your craft/ folder
$craftPath = '..';

// Do not edit below this line
$path = rtrim($craftPath, '/') . '/app/index.php';

if (!is_file($path)) {
    if (function_exists('http_response_code')) {
        http_response_code(503);
    }

    exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in ' . __FILE__);
}

require_once $path;
