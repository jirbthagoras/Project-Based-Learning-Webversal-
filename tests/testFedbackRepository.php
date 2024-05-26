<?php

use webversal\app\Repository\FeedbackRepository;

require_once  __DIR__.'/../vendor/autoload.php';

$db = \webversal\app\App\Database\database::getConnection();

$feedback = new \webversal\app\Model\feedback();
$feedback->setUserId(2);
$feedback->setOrderId(1);
$feedback->setMessage("cuki");

$FeedbackRepository = new FeedbackRepository($db);
var_dump($FeedbackRepository->save($feedback));
//$FeedbackRepository->deleteByUserId(1);

$db = null;