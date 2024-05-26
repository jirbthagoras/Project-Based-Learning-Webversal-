<?php

namespace webversal\app\Middleware;

interface Middleware
{

    public function before(): void;

}