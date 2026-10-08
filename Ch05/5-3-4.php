# Name:周序恩<BR>
# SID:C113181120<BR>
#EX04
<HR>
<?php
$total = 0;
for ($i = 0; $i <= 15; $i++) {
    if ($i % 2 == 1) {
        continue;
    }
    echo " | " . $i;
    $total += $i;
}
?>
