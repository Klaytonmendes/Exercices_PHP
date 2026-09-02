<?php

$valor = $_POST["valor"];
$produtos = $_POST["produtos"];

if ($produtos > 5 && $valor > 300) {
    $valor-=50;
    echo "O valor total da compra com desconto foi de $valor reais";
}
else {
    echo "Um dos requisitos, ou, os dois requisitos não foram concluídos para o desconto";
}