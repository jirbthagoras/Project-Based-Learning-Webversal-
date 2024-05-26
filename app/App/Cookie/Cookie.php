<?php

namespace webversal\app\App\Cookie;

use webversal\app\Model\user;

class Cookie
{

    public static function save(user $user): void
    {
        session_set_cookie_params(86400, "/");

        if(!isset($_SESSION))
        {
            session_start();
        }
        session_regenerate_id(true);


        $_SESSION['username'] = $user->getUsername();
        $_SESSION['user_id'] = $user->getId();
        $_SESSION['phoneNumber'] = $user->getPhoneNumber();
        $_SESSION['admin'] = $user->isAdmin();
    }

    public static function destroy(): void
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        session_regenerate_id(true);
        session_destroy();
        session_abort();

    }

}