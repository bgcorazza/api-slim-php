<?php

$container = $app->getContainer();

$container['errorHandler'] = function ($c) {
    return function ($request, $response, $exception) use ($c) {
        return $response->withJson($exception->getMessage(), 500)->withHeader('Access-Control-Allow-Origin', '*');
    };
};

$container['notFoundHandler'] = function ($c) {
    return function ($request, $response) use ($c) {
        return $response->withJson('endpoint not found', 500)->withHeader('Access-Control-Allow-Origin', '*');
    };
};

// Register Session component on container
$container['session'] = function ($c) {
    return new \SlimSession\Helper;
};