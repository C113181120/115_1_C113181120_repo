<?php
require "about_me.php";
echo "W11 Ex01<br/>";
echo "<HR>";

$file = basename($_SERVER["PHP_SELF"], ".php");
$path = realpath($file . ".php"); // 取得檔案實際路徑
echo "real path: $path <BR/>";

$part = pathinfo(($path));  // 取得路徑資訊
echo "path: " . $part["dirname"] . "<BR/>";
echo "filename: " . $part["basename"] . "<BR/>";
echo "extension: " . $part["extension"] . "<HR/>";

// 檢查檔案是否存在
if (file_exists($file . ".php")) {
    echo "file: $file.php exists <br/>";
} else {
    echo "file: $file.php does not exist <br/>";
}

// 複製檔案
if (!copy($file . ".php", $file . ".bak")) {
    echo "file: $file.php copy to bak failed <br/>";
} else {
    echo "file: $file.php copy to bak successful <br/>";
}

// 檔案更名
rename($file . ".bak", "test.txt");

$file = "test.txt";

unlink($file);   // 刪除檔案
echo "file: $file has been deleted <br/>";