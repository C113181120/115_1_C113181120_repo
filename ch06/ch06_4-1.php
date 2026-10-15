<?php
function printHeader() {
   
    echo "<h3>SID:C113181120</h3>";
    echo "<h3>Name:周序恩</h3>";
    echo "<h3>EX05</h3>";
}
function callFunc1(closure $closure)
{
    $closure();
}
function callFunc2(callable $callback)
{
    $callback();
}   
$hello = function() {
    echo "Hello World!<br/>";
};
function hi() {
    echo "Hi World!<br/>";
};
printHeader();

// callFunc1($hello);
callFunc1($hello);
callFunc2("hi");
callFunc2($hello);