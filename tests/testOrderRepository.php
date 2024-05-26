<?php

use webversal\app\Model\order;

require_once  __DIR__.'/../vendor/autoload.php';

$db = \webversal\app\App\Database\database::getConnection();

$order = new order();
$order->setUserId(2);
$order->setCode('EC9E236B');
$order->setPrice(30000);

$OrderRepository = new \webversal\app\Repository\OrderRepository($db, $order);
var_dump($OrderRepository->verifyByCode());

$db = null;
