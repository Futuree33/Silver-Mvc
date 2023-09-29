<?php

spl_autoload_register(
    fn ($class) => require $class . ".php"
);

require "./App/Routes.php";

Modules\Router\Router::Listen();