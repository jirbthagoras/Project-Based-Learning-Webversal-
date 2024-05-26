<?php

namespace webversal\app\App\View;

class view
{

    public static function render($view, $model): array
    {

        require __DIR__ . "/../../view/$view.php";

        return $model;

    }

    public static function redirect($view): void
    {
        require __DIR__ . "/../../view/$view.php";
    }

}