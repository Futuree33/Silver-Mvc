<?php 

namespace src\Controllers;

use Modules\Router\Request;

class Controller 
{
    
    public function __construct(Request $request)
    {       
        echo "Hello, {$request->params->name}!";
    }
}