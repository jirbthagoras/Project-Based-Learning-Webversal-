<?php

namespace webversal\app\Middleware\AuthMiddleware;

use webversal\app\App\View\view;
use webversal\app\Middleware\Middleware;

class AlreadyLogin implements Middleware
{

    public function before(): void
    {

        if(isset($_SESSION["user_id"]))
        {
            http_response_code(404);
            view::redirect("extras/NotFound");
            exit();
        }

    }

}