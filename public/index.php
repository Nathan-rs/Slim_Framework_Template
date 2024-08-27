<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


require __DIR__ . '/../bootstrap.php';

$app->get('/', [app\controllers\HomeController::class, 'index']);

$app->run();