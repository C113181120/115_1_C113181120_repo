<?php if ($showform) { // 顯示網頁表單
        require("about_me.php");
        echo "W08-EX03" . "<br/>";
        ?>
    <form action="ch08-4-5.php" method="get">
        Name: <input type=text name="Name" /><br />
        ID: <input type=text name="UserName" /><br />
        Password: <input type=password name="Pass1" /><br />
        Password-again: <input type=password name="Pass2" /><br />
        <input type="submit" name="Reg" value="Register User" />
    </form>
    <?php
    } else
        require("about_me.php");
    echo "W08-EX03" . "<br/>";
    echo $msg;  // 顯示表單處理結果
    ?>