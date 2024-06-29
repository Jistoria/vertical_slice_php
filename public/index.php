<?php

require '../vendor/autoload.php';

$router = new \App\Infrastructure\Router();
$app = $router->setup();

$app->run();