<?php

use webversal\app\Middleware\HelperMiddleware\SessionStartMiddleware;

function getRoutes(): array
{
    return [

        // Home

        "Home" => [
            "method" => "GET",
            "path" => "/",
            "controller" => \webversal\app\Controller\HomeController::class,
            "function" => "home",
            "middlewares" => [\webversal\app\Middleware\HelperMiddleware\SessionStartMiddleware::class],
        ],

        "Guide" => [
            "method" => "GET",
            "path" => "/guide",
            "controller" => \webversal\app\Controller\HomeController::class,
            "function" => "guide",
            "middlewares" => [\webversal\app\Middleware\HelperMiddleware\SessionStartMiddleware::class],
        ],

        "About" => [
            "method" => "GET",
            "path" => "/about",
            "controller" => \webversal\app\Controller\HomeController::class,
            "function" => "about",
            "middlewares" => [\webversal\app\Middleware\HelperMiddleware\SessionStartMiddleware::class],
        ],

        "Admin Panel" => [
            "method" => "GET",
            "path" => "/adminPanel",
            "controller" => \webversal\app\Controller\HomeController::class,
            "function" => "adminPanel",
            "middlewares" => [\webversal\app\Middleware\HelperMiddleware\SessionStartMiddleware::class, webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class, \webversal\app\Middleware\AuthMiddleware\IsAdminMiddleware::class],
        ],

        "User Info" => [
            "method" => "GET",
            "path" => "/userInfo",
            "controller" => \webversal\app\Controller\HomeController::class,
            "function" => "userInfo",
            "middlewares" => [\webversal\app\Middleware\HelperMiddleware\SessionStartMiddleware::class, webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

        // Register Routes

        "Register" => [
            "method" => "GET",
            "path" => "/register",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "register",
            "middlewares" => [SessionStartMiddleware::class, \webversal\app\Middleware\AuthMiddleware\AlreadyLogin::class],
        ],

        "PostRegister" => [
            "method" => "POST",
            "path" => "/register",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "postRegister",
            "middlewares" => [\webversal\app\Middleware\AuthMiddleware\AlreadyLogin::class],
        ],

        // Login Routes

        "Login" => [
            "method" => "GET",
            "path" => "/login",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "login",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AlreadyLogin::class],
        ],

        "PostLogin" => [
            "method" => "POST",
            "path" => "/login",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "postLogin",
            "middlewares" => [\webversal\app\Middleware\AuthMiddleware\AlreadyLogin::class],
        ],

//        Your Orders Feature Route

        "YourOrders" => [
            "method" => "GET",
            "path" => "/yourOrders",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "yourOrders",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

//        Your Receipts Feature Route

        "YourReceipts" => [
            "method" => "GET",
            "path" => "/yourReceipts",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "yourReceipts",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

        //        Your Drafts Feature Route

        "YourDrafts" => [
            "method" => "GET",
            "path" => "/yourDrafts",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "yourDrafts",
            "middlewares" => [\webversal\app\Middleware\HelperMiddleware\SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

//        Not Found Route

        "NotFound" => [
            "method" => "GET",
            "path" => "/notFound",
            "controller" => \webversal\app\Controller\HomeController::class,
            "function" => "notFound",
            "middlewares" => [],
        ],

//        Logout Route

        "Logout" => [
            "method" => "GET",
            "path" => "/logout",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "logout",
            "middlewares" => [],
        ],

        //Order Routes

        "Order" => [
            "method" => "GET",
            "path" => "/order/create",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "createOrder",
            "middlewares" => [\webversal\app\Middleware\HelperMiddleware\SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

        "PostOrder" => [
            "method" => "POST",
            "path" => "/order/create",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "postCreateOrder",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

//        Undraft Regex Route

        "Undraft" => [
            "method" => "GET",
            "path" => "/draft/undraft/code/([0-9a-zA-Z]*)",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "undraft",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

//         Delete draft regex route

        "DeleteDraft" => [
            "method" => "GET",
            "path" => "/draft/delete/code/([0-9a-zA-Z]*)",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "deleteDraft",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

//        Change Phone Number

        "ChangeNum" => [
            "method" => "GET",
            "path" => "/changeNum",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "changePhoneNumber",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

        "PostChangeNum" => [
            "method" => "POST",
            "path" => "/changeNum",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "postChangePhoneNumber",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

        //        Change Password

        "ChangePassword" => [
            "method" => "GET",
            "path" => "/changePass",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "changePassword",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

        "PostChangePassword" => [
            "method" => "POST",
            "path" => "/changePass",
            "controller" => \webversal\app\Controller\UserController::class,
            "function" => "postChangePassword",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class],
        ],

        "Manage Order" => [
            "method" => "GET",
            "path" => "/manageOrder",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "manageOrder",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class, \webversal\app\Middleware\AuthMiddleware\IsAdminMiddleware::class],
        ],

//        Admin routes

        "Verify" => [
            "method" => "GET",
            "path" => "/verify/code/([0-9a-zA-Z]*)",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "verifyOrder",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class, \webversal\app\Middleware\AuthMiddleware\IsAdminMiddleware::class],
        ],

        "Set Price" => [
            "method" => "GET",
            "path" => "/setPrice/([0-9a-zA-Z]*)",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "setPrice",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class, \webversal\app\Middleware\AuthMiddleware\IsAdminMiddleware::class],
        ],

        "Post Set Price" => [
            "method" => "POST",
            "path" => "/setPrice",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "postSetPrice",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class, \webversal\app\Middleware\AuthMiddleware\IsAdminMiddleware::class],
        ],

        "Cancel Order" => [
            "method" => "GET",
            "path" => "/cancel/([0-9a-zA-Z]*)",
            "controller" => \webversal\app\Controller\OrderController::class,
            "function" => "cancelOrder",
            "middlewares" => [SessionStartMiddleware::class,\webversal\app\Middleware\AuthMiddleware\AuthMiddleware::class, \webversal\app\Middleware\AuthMiddleware\IsAdminMiddleware::class],
        ],

    ];
}