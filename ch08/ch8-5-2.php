
<?php

if (isset($_COOKIE["ItemName"])) {
    $itemName = $_COOKIE["ItemName"];
    $quantity = $_COOKIE["Quantity"];

    echo "取得ItemName的Cookie值 : " . $itemName . "<br/>";
    echo "取得Quantity的Cookie值 : " . $quantity . "<br/>";

    setcookie("ItemName", "", time() - 3600);
    setcookie("Quantity", "", time() - 3600);
} else {

}
?>
<BR>
<a href="ch08-5-1.php">Receive Cookie</a>