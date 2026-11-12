<?php
function each(&$array)
{
    $res = array();
    $key = key($array);
    if ($key !== null) {
        next($array);
        $res[1] = $res['value'] = $array[$key];
        $res[0] = $res['key'] = $key;
    } else {
        $res = false;
    }
    return $res;
}
?>
<table border="0">
  <tr bgcolor="#CC99FF">
    <td>功能</td>
    <td>編號</td>
    <td>名稱</td>
    <td>價格</td>
    <td>數量</td>
  </tr>
<?php
$flag = false;
$total = 0;
while (list($arr, $value) = each($_COOKIE)) {

}
?>
</table>

<HR><BR>

| <a href="catalog.php">Catalog</a> |
<a href="shoppingcart.php">Mini Cart</a>
