<?php

require_once __DIR__ . "/../vendor/autoload.php";

$user = new \webversal\app\Model\user();

$user->setId(2);
$user->setUsername("jirbb");

//\webversal\app\App\Cookie\Cookie::save($user);
\webversal\app\App\Cookie\Cookie::destroy();