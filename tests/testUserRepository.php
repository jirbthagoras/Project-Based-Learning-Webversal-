<?php

use webversal\app\Repository\UserRepository;

require_once __DIR__ . "/../vendor/autoload.php";

$db = \webversal\app\App\Database\database::getConnection();

//$statement = $db->prepare("INSERT INTO users(username, password, phone_number) VALUES(?, ?, ?)");
//$statement->execute([
//    "Banon",
//    "BanonGemink",
//    "12312124"
//]);

$user = new \webversal\app\Model\user();
$user->setId(1);
$user->setUsername("MEMEKHITAM");
$user->setPassword("APAKAMU");
$user->setPhoneNumber(231231);

$UserRepository = new UserRepository($db, $user);
//$UserRepository->save($user);

//var_dump($UserRepository->findById());
var_dump($UserRepository->save());

$db = null;