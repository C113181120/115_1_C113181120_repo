
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["product"];
    $qty = filter_input(
        INPUT_POST, "quantity", FILTER_VALIDATE_INT
    );

    if (isset($products[$id]) && $qty !== false
        && $qty !== null && $qty > 0) {

        if (!isset($_SESSION["cart"][$id])) {
            $_SESSION["cart"][$id] = 0;
        }

        $_SESSION["cart"][$id] += $qty;
        header("Location: cart.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
<meta charset="UTF-8">
<title>W10-EX02</title>
</head>
<body>

SID: C1234567<br>
Name: Smith

<hr>

W10-EX02

<hr>

<form method="post" action="catalog.php">

<select name="product">
<?php
foreach ($products as $id => $item) {
    echo "<option value='$id'>";
    echo htmlspecialchars($item["name"]);
    echo " - $" . $item["price"];
    echo "</option>";
}
?>
</select>

<input type="number"
       name="quantity"
       value="1"
       min="1"
       style="width:90px"
       required>

<input type="submit" value="訂購">

</form>

<hr>

<br>

| <a href="catalog.php">Catalog</a>
| <a href="cart.php">Mini Cart</a>

</body>
</html>