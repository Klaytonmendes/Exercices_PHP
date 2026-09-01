<?php

$ano_nascimento = $_POST["ano_nascimento"];
$ano_inicio = $_POST["ano_inicio"];


$idade = 2026 - $ano_nascimento;
$vinculo = 2026 - $ano_inicio;

if ( $idade >= 65 || $vinculo >= 30 || $idade >= 60 && $vinculo >= 25) {
    echo "O senhor com $idade anos de idade e $vinculo anos de trabalho, pode se aposentar";
}
else {
    echo "O(a) senhor(a) com $idade anos de idade e $vinculo anos de trabalho, não pode se aposentar";
}