<?php

/*
 * Enable Cross-origin resource sharing
 */
$corsOptions = array(
    "origin" => "*",
    "exposeHeaders" => array("X-My-Custom-Header", "X-Another-Custom-Header"),
    "allowMethods" => array('GET', 'POST', 'PUT', 'DELETE', 'OPTIONS')
);
$cors = new \CorsSlim\CorsSlim($corsOptions);

/*
 * Enable Session Control
 */
$app->add(new \Slim\Middleware\Session());
$app->add($cors);