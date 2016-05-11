<?php

return [

    // allow updates
    'allowAutoUpdates' => getenv('APP_ALLOW_UPDATES'),

    // backup db on update
    'backupDbOnUpdate' => getenv('APP_BACKUP_ON_UPDATE'),

    // cache method
    'cacheMethod' => getenv('APP_CACHE_METHOD'),

    // environment specific info
    'environmentVariables' => [
        'basePath' => getenv('APP_BASE_PATH'),
        'siteUrl' => getenv('APP_SITE_URL')
    ],

    // Prevent index.php in urls
    'omitScriptNameInUrls' => getenv('APP_OMIT_SCRIPT'),

    // Default image quality for image transforms
    'defaultImageQuality' => getenv('APP_IMAGE_QUALITY')

];
