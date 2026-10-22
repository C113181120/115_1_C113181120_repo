<?php
include("about_me.php");
echo"EX03<br/>";
$arr = array(
    "Color"=>"Black",
    "name"=>"陳惠安", 
    "Shape"=>"Triangle",
    100
);
$arr["type"] = "PHP";
unset($arr["type"]);
foreach ($arr as $key => $value) {
    echo "$key=>$value<br/>";
}
echo "<br/>";
print_r($arr);
?>