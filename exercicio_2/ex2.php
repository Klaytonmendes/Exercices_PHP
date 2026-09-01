<?php

$litros = $_POST["litros"];
$tipo = $_POST["tipo"];
$codificado;

if ($tipo = "Alcool" && $litros <= 20) {
    $codificado == "A";
    $desconto = 3.49 * 0.03;
    $novovalor = 3.49 - $desconto;
    $result = $litros * $novovalor;
    echo "Você comprou $litros litros de $codificado, pagando $result reais";
} elseif ($tipo = "Alcool" && $litros > 20) {
    $codificado == "A"
    $desconto = 3.49 * 0.05;
    $novovalor = 3.49 - $desconto;
    $result = $litros * $novovalor;
    echo "Você comprou $litros litros de $codificado, pagando $result reais";
} elseif ($tipo = "Gasolina" && $litros <= 20) {
    $codificado == "G"
    $desconto = 5.49 * 0.04;
    $novovalor = 5.49 - $desconto;
    $result = $litros * $novovalor;
    echo "Você comprou $litros litros de $codificado, pagando $result reais";
}elseif ($tipo = "Gasolina" && $litros > 20) {
    $codificado == "G"
    $desconto = 5.49 * 0.06;
    $novovalor = 5.49 - $desconto;
    $result = $litros * $novovalor;
    echo "Você comprou $litros litros de $codificado, pagando $result reais";
<<<<<<< HEAD
}
=======
}
>>>>>>> cf98dc1d96910cd9067799dee3756959bb2bdaaf
