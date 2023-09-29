<?php

use src\Controllers\Controller;
use Modules\Router\RequestMethod;
use Modules\Router\Router;


Router::Add(RequestMethod::Get, "/aa/{name}", Controller::class);