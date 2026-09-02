<?php

$idade = $_POST["idade"];
$gestante = $_POST["sim_nao"];

if ($idade >= 59 || $gestante == "S") {
    echo "Tem direito a vaga presencial! Com $idade anos e a condição é $gestante para a gravidez.";
}
else {
    echo "Você não possui direito a vaga presencial!";
}