<?php

// Path to your craft/ folder
$craftPath = '../';

// if this is a local instance
if (getenv('APP_ENV') == 'local') {
    require_once('../vendor/autoload.php');

    try {
        $dotenv = new Dotenv\Dotenv(dirname(__DIR__));
        $dotenv->load();
        $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS', 'DB_PREFIX']);
    } catch (Exception $e) {
        exit('Could not load environment.');
    }
}

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

// define the path the the templates
define('CRAFT_TEMPLATES_PATH', '../resources/templates/');

if (!is_file($path)) {
    if (function_exists('http_response_code')) {
        http_response_code(503);
    }

    exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
