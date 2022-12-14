<?php

include_once __DIR__ . '/../config/bootstrap.php';

$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->addDefinitions(__DIR__ . '/../config/di-container.php');
$app = \DI\Bridge\Slim\Bridge::create($containerBuilder->build());

include_once __DIR__ . '/../config/routes.php';

$app->run();