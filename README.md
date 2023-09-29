# Silver MVC: A Lightweight PHP 8.2+ Framework

## Introduction

Silver MVC is designed to be a straightforward and user-friendly PHP framework, compatible with PHP 8.2 and above. Unlike heavyweight frameworks such as Laravel or Symfony, Silver aims to provide simplicity and ease of use without unnecessary complexity.

Silver is not complete and not ready for production. The plan is to keep developing it into the future and making it a great alternative to other frameworks.

## Why Silver?

Many developers find larger frameworks like Laravel or Symfony overwhelming and cumbersome, especially for specific tasks. Silver MVC addresses this concern by offering an easy-to-use PHP framework without the overhead of these larger alternatives.

## How to Use Silver

Silver must stay as clean as possible! Therefore, we maintain a simple and organized file structure. The only directory you need to interact with is `/App`. Within this directory, you can:

- Create Views (`./Views`)
- Create Controllers (`./Controllers`)
- Create Routes (`Routes.php`)

Keeping the file structure minimal ensures a clean and efficient development experience with Silver MVC.

### Routes

Example of creating a Route.
```php
Router::Add(
    RequestMethod::Get,
    "/hello/{name}",
    Controller::class
);
```

### Controllers

In silver you must make a controller for every route. When a route is matched a new instance of the controller is created and as a result the constructor of the controller is ran. In the constructor 2 classes are passed, `Request` and `Response` which contain useful methods and properties.

```php
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
```

## Feature Plans
- PDO Wrapper
- Middleware

