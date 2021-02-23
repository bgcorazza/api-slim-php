<?php

use Modules\Api\HelloWorldController;

$app->get('/', HelloWorldController::class.':index');