<?php

$id = $_POST["id"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$conceitos;
$media = ($n1 + $n2 + $n3 + $n4) / 4;


if ($media >= 9 && $media <= 10) {
    $conceitos = "A";
} elseif ($media >= 7.5 && $media <= 8.9) {
    $conceitos = "B";
} elseif ($media >= 6 && $media <= 7.4) {
    $conceitos = "C";
} elseif ($media >= 4 && $media <= 5.9) {
    $conceitos = "D";
} elseif ($media >= 0 && $media <= 3.9) {
$conceitos = "E";
};

if ($conceitos == "A" || $conceitos == "B" ||$conceitos == "C"){
    echo ("Prezado aluno do RM: $id, você conquistou uma média: $media e um $conceitos de conceito. Você foi APROVADO com sucesso!");
}
elseif ($conceitos == "D" || $conceitos == "E") {
    echo ("Prezado aluno do RM: $id, você conquistou uma média: $media e um $conceitos de conceito. Você foi REPROVADO!");
};