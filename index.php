<?php

spl_autoload_register(
    fn ($class) => require $class . ".php"
);

require "./src/routes.php";

Modules\Router\Router::Listen();