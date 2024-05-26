<?php

use webversal\app\Repository\SessionRepository;

require_once  __DIR__.'/../vendor/autoload.php';

$db = \webversal\app\App\Database\database::getConnection();

$user = new \webversal\app\Model\user();
$user->setId(4);
$user->setUsername("jirb");
$user->setPassword("jirb");
$user->setPhoneNumber(12323);

$SessionRepository = new SessionRepository($db, $user);
//$SessionRepository->save($session);
//var_dump($SessionRepository->findByUserId());
//$SessionRepository->replaceCode();
//var_dump($SessionRepository->findByUserId());
var_dump($SessionRepository->save());

$db = null;