<?php

$idade = $_POST["idade"];

if($idade <= 12) {
    echo ("Você é uma criança!");
}
else if ($idade >= 15 && $idade <= 17) {
    echo ("Você é um adolescente!");
}
else if ($idade >=18 && $idade <= 59)  { 
    echo ("Você é um adulto!");
}
else {
    echo ("Você é um idoso!");
}