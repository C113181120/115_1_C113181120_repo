<?php
include "ch06_5_1.inc";
include_once ("ch06_5_2.inc");

$amount = 1000;
$rate = 28.1;
// 呼叫函數
$result = rateExchange($amount, $rate);
print "1000美金兌換新台幣=". $result ."元<br/>";

require ("ch06_5_1.inc"); 
$file = "ch06_5_1.inc";
require $file;

require ("about_me.php");