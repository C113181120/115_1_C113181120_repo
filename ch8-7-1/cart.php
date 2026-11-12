
<?php
session_start();

$products = [
    "S001" => ["name" => "10吋平板電腦", "price" => 12000],
    "S002" => ["name" => "12吋平板電腦", "price" => 18000],
    "S003" => ["name" => "15.6吋筆記型電腦", "price" => 27000]
];

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}

// 刪除商品
if (isset($_POST["delete"])) {
    $id = $_POST["delete"];

    unset($_SESSION["cart"][$id]);

    header("Location: cart.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>W10-EX02 Mini Cart</title>
</head>
<body>

SID: C113181120<br>
Name: 周序恩

<hr>

W10-EX02

<hr>

<table>
<tr style="background-color:#CC99FF">
    <td>功能</td>
    <td>編號</td>
    <td>名稱</td>
    <td>價格</td>
    <td>數量</td>
</tr>

<?php
$total = 0;

foreach ($_SESSION["cart"] as $id => $qty) {

    if (!isset($products[$id])) {
        continue;
    }

    $name = $products[$id]["name"];
    $price = $products[$id]["price"];
    $total += $price * $qty;

    echo "<tr style='background-color:#99FFCC'>";

    echo "<td>";
    echo "<form method='post' style='margin:0'>";
    echo "<button type='submit' name='delete' ";
    echo "value='$id'>刪除</button>";
    echo "</form>";
    echo "</td>";

    echo "<td>$id</td>";
    echo "<td>$name</td>";
    echo "<td>$price</td>";
    echo "<td>$qty</td>";

    echo "</tr>";
}
?>

<tr style="background-color:yellow">
    <td colspan="5" align="right">
        總金額 = NT$<?php echo $total; ?>元
    </td>
</tr>

</table>

<hr>

<br>

| <a href="catalog.php">Catalog</a>
| <a href="cart.php">Mini Cart</a>

</body>
</html>