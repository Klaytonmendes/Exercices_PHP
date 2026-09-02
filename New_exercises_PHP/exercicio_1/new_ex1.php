<?php

$ano_nascimento = $_POST["nascimento"];

$idade = 2026 - $ano_nascimento;
if ($idade >= 16) {
    echo "Você tem idade para votar";
}
else {
    echo "Você não tem idade para votar";
}
