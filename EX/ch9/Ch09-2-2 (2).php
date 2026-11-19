<?php

require "about_me.php";
echo "W11 Ex02<br/>";
echo "<HR>";

$file = 'mybooks.txt';    // 檔案名稱
$content = "PHP與MySQL網頁設計範例教本\r\n";

$fp = fopen($file, "w")  // 開啟檔案
      or exit("檔案 $file 開啟錯誤<br/>");

if (fwrite($fp, $content)){
    echo "寫入檔案 $file 成功<br/>";
}else{
    echo "寫入檔案 $file 錯誤<br/>";
}   // 寫入檔案  

fclose($fp); // 關閉檔案