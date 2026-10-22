<?php
include("about_me.php");
echo"EX04<br/>";

$ip = $_SERVER["REMOTE_ADDR"];
echo "IP　Address: " . $ip . "<br/>";

$path = $_SERVER["SCRIPT_NAME"];
echo "Path: " . $path . "<br/>";
?>
<table border="1">
    <tr>
        <TD>key</TD>
        <TD>value</TD>
    </tr>
    <?php
    foreach ($_SERVER as $key => $value) {
        echo "<tr><td>" . $key . "</td>";
        echo "<td>" . $value . "</td></tr>";
    }
    ?>
</table>