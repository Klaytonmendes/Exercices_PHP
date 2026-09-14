<?php
$tablemult = $_POST["num1"];
$i = 1;
do {
    $result = $tablemult * $i;
    echo ("$i * $tablemult = $result<br>");
    $i++;
}
while ($i <=10)
?>