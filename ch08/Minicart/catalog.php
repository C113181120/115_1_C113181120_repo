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
