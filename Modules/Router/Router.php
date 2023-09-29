<?php

namespace Modules\Router;

enum RequestMethod
{
    case Get;
    case Post;
}

final class Router
{   

    private static array $routes = [];


    public static function Add(RequestMethod $requestMethod, string $route, string $controller) : void
    {   
        self::$routes[] = [
            "requestMethod" => $requestMethod,
            "route" => $route,
            "controller" => $controller,
        ];
    }   

    public static function Listen() : void 
    {
        $url = "/" . ($_GET["url"] ?? "");
 
        foreach (self::$routes as $route) 
        {
            $pattern = self::RegexRoute($route["route"]);

            if (!preg_match($pattern, $url, $paramMatches)) 
            {
                continue;
            }

            if (strtoupper($route["requestMethod"]->name) !== $_SERVER["REQUEST_METHOD"]) 
            {
                die("Invalid Method");
            }

            self::RunController(
                $route["controller"],
                $paramMatches
            );
        }   
    }   


    private static function RunController(string $controller, array $paramMatches)
    {
        $params = array_filter(
            $paramMatches, 
            fn ($key) => is_string($key), 
            ARRAY_FILTER_USE_KEY
        );

        $request = new Request(
            (object) $params
        );

        new $controller($request);
    }

    private static function RegexRoute(string $route) : string
    {
        $pattern = preg_replace('/\//', '\\/', $route);
        $pattern = preg_replace('/\{([a-zA-Z]+)\}/', '(?P<\1>[a-zA-Z0-9-]+)', $pattern);
        $pattern = '/^' . $pattern . '$/';

        return $pattern;
    }
}

