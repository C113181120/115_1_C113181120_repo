<?php

function printHeader() {
    echo "<h3># Name:周序恩</h3>";
    echo "<h3>SID:C113181120</h3>";
    echo "<h3>EX03</h3>";
}

function volume($length, $width = 10, $height = 15) {
    

    print $length . "x" . $width . " x " . $height . " = ";
    return $length * $width * $height;
}
printHeader();
$l = 10;
$w = 20;
$h = 30;

print "盒子體積: " . volume($l, $w, $h) . "<br/>";
print "盒子體積: " . volume($l, $w) . "<br/>";
print "盒子體積: " . volume($l, $h) . "<hr/>";

$func = "volume";
print "盒子體積: " . $func($l, $w, $h) ."<br/>";
print "盒子體積: " . $func($l, $w) . "<br/>";