
<?php
require "about_me.php";
echo "W11 Ex03<br/><HR>";

$msg = "";

if (isset($_POST["Name"])) {
    $file = "guestbook.txt";
    if (!file_exists($file)) {
        $fp = fopen($file, "w");
        fclose($fp);
    }

    $email = $_POST["Email"];  // 取得郵件地址
    $name = "<a href='email.php?address=";
    $name .= $email . "'>" . $_POST["Name"] . "</a>";

    $messages = nl2br($_POST["Message"]);
    $fp = fopen($file, "a");  // 開啟檔案
    $today = date("Y年m月d日 h:i:s");
    // 建立留言訊息
    $msg = "<b>留言時間：</b>" . $today . "<br/>";
    $msg .= "<b>姓名：</b>" . $name . "<br/>";
    $msg .= "<b>留言：</b>" . $messages . "<br/><hr/>";

    fputs($fp, $msg);  // 寫入檔案
    fclose($fp);       // 關閉檔案
    $msg = "新增留言成功!<br/>";
}

?>
<form action="guestbook.php" method="post">
    <table border="1">
        <TR>
            <TD>Name: </TD>
            <TD><input type="text" name="Name" /></TD>
        </TR>
        <TR>
            <TD>Email: </TD>
            <TD><input type="text" name="Email" /></TD>
        </TR>
        <TR>
            <TD>Content: </TD>
            <TD>
                <textarea name="Message" rows="4" cols="30"></textarea>
            </TD>
        </TR>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="Send" value="Send Message" />
                <input type="reset" name="Reset" value="Reset Fields" />
            </td>
        </tr>
    </table>
</form> <?php echo $msg ?> <br />
| <a href="guestbook.php">新增留言</a>
| <a href="showmessage.php">檢視留言</a> |