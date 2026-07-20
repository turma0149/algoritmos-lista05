<?php

$dia = 7;
$valor = 100.00;

switch ($dia) {
    case 1:
        echo ("Domingo");
        break;
    case 2:
        echo ("Segunda");
        break;
    case 3:
        echo ("Terça-feira");
        break;
    case 4:
        echo ("Quarta-feira");
        break;
    case 5:
        echo ("Quinta-feira");
        break;
    case 6:
        echo ("Sexta-feira");
        break;
    case 7:
        echo ("Sábado");
        break;
    default:
        echo ("Opção inválida");
        break;
}
