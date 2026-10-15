<?php
function printHeader() {
    echo "<h3># Name:周序恩</h3>";
    echo "<h3>SID:C113181120</h3>";
    echo "<h3>Name:周序恩</h3>";
    echo "<h3>PHP and MySQL PageDesign</h3>";
    echo "<h3>EX02</h3>";
}
function rateExchange($amount, $rate) {
    $result = $amount * $rate;
    return $result;
}

$rate = rateExchange(1000,32.5);
echo "Money: " . $rate;
printHeader();
echo "Money: " . $rate;

