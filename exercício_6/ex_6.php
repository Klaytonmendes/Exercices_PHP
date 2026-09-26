<?php
$multiplicacao = $_POST["numero"];
$resultado = 0;

for ($i = 0; $i <= 10; $i++) {
    $resultado = $multiplicacao * $i;
    echo ("$multiplicacao X $i = $resultado\n");
}