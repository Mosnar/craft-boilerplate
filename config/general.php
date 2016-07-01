<?php

// these items are shared between environments
$shared = [
    // general options
    'siteName' => getenv('APP_NAME'),
    'sendPoweredByHeader' => false,

    // template options
    'errorTemplatePrefix' => "_errors/",

    // user options
    'useEmailAsUsername' => true
];

// if the instance is local
if (getenv('APP_ENV') == 'local') {
    // merge shared with local
    return array_merge($shared, [
        // general options
        'devMode' => true,

        // caching options
        'enableTemplateCaching' => false,

        // user options
        'testToEmailAddress' => 'you@domain.com'
    ]);
}

// assume we are in staging/production

return array_merge($shared, [
    // general options
    'cacheMethod' => 'redis',
    'devMode' => false,
    'environmentVariables' => [
        'baseAssetUrl'  => getenv('APP_URL'),
        // 'baseAssetPath' => './',
    ],
    'siteUrl' => getenv('APP_URL'),

    // security options
    'enableCsrfProtection' => true,
    'validationKey' => getenv('APP_KEY'),

    // updates
    'allowAutoUpdates' => false,
    'backupDbOnUpdate' => false,
    'restoreDbOnUpdateFailure' => false,

    // urls
    'addTrailingSlashesToUrls' => true,
    'cpTrigger' => getenv('APP_CPTRIGGER'),
    'omitScriptNameInUrls' => true,

    // assets
    'imageDriver' => 'imagick'
]);
