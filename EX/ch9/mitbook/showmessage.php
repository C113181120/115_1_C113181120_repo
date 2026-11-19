<?php

$file = "guestbook.txt";

if(!file_exists($file) or filesize($file) == 0){
    echo "there are no messages yet!<hr/>";
}else{
    readfile($file);  // read and display messages
}
?>

<br/>
| <a href="guestbook.php">新增留言</a> |