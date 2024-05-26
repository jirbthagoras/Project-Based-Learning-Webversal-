<?php

session_start();

echo $_SESSION['user_id'] . PHP_EOL;
echo $_SESSION['username'];
echo $_SESSION['phoneNumber'];