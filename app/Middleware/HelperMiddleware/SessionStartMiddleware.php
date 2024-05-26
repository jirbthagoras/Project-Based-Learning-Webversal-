<?php

namespace webversal\app\Middleware\HelperMiddleware;

use webversal\app\Middleware\Middleware;

class SessionStartMiddleware implements Middleware
{


    public function before(): void
    {

        if (!isset($_SESSION)) {
            session_start();
        }

    }

}