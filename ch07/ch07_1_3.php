<?php
include("about_me.php");
echo"EX02<br/>";
$score = array(22, 16, 30, 24);
$total = 0;

foreach ($score as $element) {
    echo "element : $element <br/>";
    $total += $element;
}

echo "Total: " . $total . "<br/>";

print_r($score);
?>