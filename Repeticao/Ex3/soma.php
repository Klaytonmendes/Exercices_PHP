<?php
$inicial = $_POST["num1"];
$final = $_POST["num2"];
$result = 0;
 
for ($i = $inicial; $i<=$final; $i++) {
$result += $i;
echo " + $i";
}
echo " = $result"
?>