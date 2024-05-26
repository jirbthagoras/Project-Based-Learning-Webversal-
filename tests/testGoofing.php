<?php

require_once __DIR__ . "/../vendor/autoload.php";

$password = 'password';

if (password_verify("password", $password)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

//$db = \webversal\app\App\Database\database::getConnection();


//$db = null;