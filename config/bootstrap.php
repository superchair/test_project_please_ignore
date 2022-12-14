<?php

use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

if (!defined('ENV_LOADED')) {
    $rootDir = __DIR__ . '/..';

    $dotEnv = Dotenv::createImmutable($rootDir);

    try {
        $dotEnv->load();
    } catch (\Exception $exception) {
        var_dump($exception->getMessage());
    }

    if (getenv('APP_ENV') !== 'test') {
        // add all required .env key/val pairs here
        $dotEnv->required([
            'APP_ENV',
            'LOG_LEVEL',
            'BASE_URL'
        ]);
    }
    define('ENV_LOADED', true);
}