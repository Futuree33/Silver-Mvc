<?php 

namespace App\Controllers;

use Modules\Router\Request;
use Modules\Router\Response;

class Controller 
{
    
    public function __construct(Request $request, Response $response)
    {       
        echo "Hello, {$request->params->name}!";
    }
}