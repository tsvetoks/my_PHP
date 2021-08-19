<?php

$clientBalance = 1000;
var_dump($clientBalance);
$clientBalance = $clientBalance -200;
$clientBalance = $clientBalance +100;
var_dump($clientBalance);

//$1dollar = 1;
//$one$ = 1;
//$test-string = 'data';
$не_надо_так = 'пожалуйста';
var_dump($не_надо_так);

$client_birthday_month = 5;
$clientBirthdayMonth = 5;


$usd = 123;


echo '<br><br>';
var_dump($clientBalance);
echo '<br>';

$clientBalanceBackup = &$clientBalance;
$clientBalance -= 500;
$clientBalanceBackup -= 50;
var_dump($clientBalance, $clientBalanceBackup);

echo '<br><br>';

$t = 'q';
$$t = 123;
var_dump($q);

$a = 'ab';
$$a = 'ppp';
$$$a = 123;
var_dump($ppp);

// var_dump($$$