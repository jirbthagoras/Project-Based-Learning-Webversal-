<?php

namespace webversal\app\Controller;

use webversal\app\App\View\view;

class HomeController
{

    public function notFound()
    {

        view::redirect("extras/NotFound");

    }

    public function login()
    {
        view::redirect("login");
    }

    public function home()
    {
        view::redirect("index");
    }

    public function guide()
    {
        view::redirect("guides");
    }

    public function about()
    {
        view::redirect("about");
    }

    public function userInfo()
    {
        view::render("pemesanan/indexuser", $model = []);
    }

    public function adminPanel()
    {
        view::render("pemesanan/adminPanel", $model = []);
    }

}