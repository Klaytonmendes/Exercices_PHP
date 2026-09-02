<?php

$salario = $_POST["salario"];
$tempo_empresa = $_POST["tempo"];

if ($tempo_empresa >= 6) {
    $salario+=500;
    echo "Você está a tanto tempo na nossa empresa, que você merece um bônus de 500 reais. Agora seu salário é: $salario";
}
else {
    echo "Você não ganhará o bônus, pois seu tempo de empresa é curto";
}