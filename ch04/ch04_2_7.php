<?php
// 1. 將函式定義放入 PHP 標籤內
function square(float|int $v): int|float {
    return $v ** 2;
}

// 2. 呼叫函式並顯示結果
echo "square(2) = " . square(2) . "<br/>";
echo "square(2.5) = " . square(2.5) . "<br/>";
?>