<?php 

namespace Modules\Router;

class Request 
{
    public function __construct(
        public object $params
    ) {}
}