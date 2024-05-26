<?php

namespace webversal\app\Middleware\AuthMiddleware;

use webversal\app\App\View\view;
use webversal\app\Middleware\Middleware;

class IsAdminMiddleware implements Middleware
{

    public function before(): void
    {
        if($_SESSION['admin'] == 0)
        {
            http_response_code(404);
            view::redirect("extras/NotFound");
            exit();
        }

    }

}