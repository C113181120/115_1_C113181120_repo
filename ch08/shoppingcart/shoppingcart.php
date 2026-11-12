<?php
    $flag = false;
    $total = 0;
    while (list($arr, $value) = each($_COOKIE)) {

    }
    ?>
    <?php
    $flag = false;
    $total = 0;
    while (list($arr, $value) = each($_COOKIE)) {
        if (isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])) {
            if ($flag) {

            } else {

            }

            while (list($name, $value) = each($_COOKIE[$arr])) {

            }

        }

    }
    if ($total != 0) {  // 顯示總金額
        echo "<tr bgcolor=yellow><td colspan=5 align=right>";
        echo "總金額 = NT$" . $total . "元</td></tr>";
    }
    ?>
    echo "<tr bgcolor='" . $color . "'><td>";
            echo "<a href='delete.php?Id=" . $arr . "'>";
            echo "刪除</a></td>";
            echo "<td>" . $value . "</td>";
                if ($name == "Price")
                    $price = $value;
                if ($name == "Quantity")
                    $quantity = $value;
    $total += $price * $quantity;  // 計算總金額
            echo "</tr>";