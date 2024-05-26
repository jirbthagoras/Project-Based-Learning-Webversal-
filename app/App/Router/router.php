<?php


namespace webversal\app\App\Router;

use webversal\app\App\View\view;

class router
{

    private static array $routes = [];

    public static function add(string $method,
                               string $path,
                               string $controller,
                               string $function,
                               array $middlewares = []): void
    {

        self::$routes[] = [
            "method" => $method,
            "path" => $path,
            "controller" => $controller,
            "function" => $function,
            "middlewares" => $middlewares
        ];

    }

    public static function run(): void
    {

        require_once __DIR__ . "/../../../vendor/autoload.php";

        $path = '/';

        if(isset($_SERVER["PATH_INFO"]))
        {

            $path = $_SERVER["PATH_INFO"];
        }

        $method = $_SERVER["REQUEST_METHOD"];


        foreach (self::$routes as $route) {
            $pattern = "#^" . $route['path'] . "$#";
            if (preg_match($pattern, $path, $variable) && $method == $route['method'])
            {

                foreach ($route['middlewares'] as $middleware) {

                    $Instance = new $middleware();
                    $Instance->before();

                }

                $controller = new $route['controller'];
                $function = $route['function'];

                array_shift($variable);
                call_user_func_array([$controller, $function], $variable);
                return;
            }
        }

        http_response_code(404);
        view::redirect("extras/NotFound");
    }

}