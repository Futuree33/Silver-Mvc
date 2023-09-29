<?php

use App\Controllers\Controller;
use Modules\Router\RequestMethod;
use Modules\Router\Router;

Router::Add(RequestMethod::Get, "/hello/{name}", Controller::class);