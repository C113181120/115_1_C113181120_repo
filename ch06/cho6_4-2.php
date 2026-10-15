<?php
function printHeader() {
   
    echo "<h3>SID:C113181120</h3>";
    echo "<h3>Name:周序恩</h3>";
    echo "<h3>EX06</h3>";
}

printHeader();
$weight = 100;
$bmi = function($height) use ($weight) {
      $height = $height / 100.0;
      return $weight / ($height * $height);
};
$h = 173;
echo"BMI = " . $bmi($h) ."<br/>";
?>