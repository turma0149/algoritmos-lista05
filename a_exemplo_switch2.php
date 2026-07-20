<?php

//Registre um produto e de acordo com valor faça um 
//desconto

$valorDesconto = rand(1,4);
$desconto = 0;

echo("Valor desconto: " . $valorDesconto . "<br>");

switch ($valorDesconto) {
    case 1:
       $desconto =  $valorDesconto * 10 / 100;
       echo("1 - ");
       break;
    case 2: 
       $desconto = $valorDesconto * 20 / 100;
       echo("2 - ");
       break; 
    case 3: 
       $desconto = $valorDesconto * 30 /100;
       echo("3 - ");
       break;
    default: 
       echo ("Opção inválida");
       break;
}

echo ("Desconto: " . $desconto);




?>