<?php
$file = basename($_SERVER["PHP_SELF"], ".php");
// open the file
$fp = fopen($file . ".php", "r")
    or exit("file: $file.php open error<br/>");

echo "file: $file.php open successful <br/>";
echo "file size: " . filesize($file . ".php") . "<br/>";
fclose($fp); // close file
echo "file: $file.php has been closed <br/>";