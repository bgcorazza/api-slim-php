<?php

namespace Modules\Api;

use Slim\Http\Request;
use Slim\Http\Response;
use Psr\Container\ContainerInterface;

/**
 * HelloWorldController
 */
class HelloWorldController {

    /**
     *
     * @var Psr\Container\ContainerInterface
     */
    protected $container;
    
    /**
     * Set Container
     *
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }
    
    /**
     * @param Request $request
     * @param Response $response
     * @param array $args
     */
    public function index(Request $request, Response $response, array $args) {
        return $response->withJson(array("Hello" => "World"), 200);
    }
    
}