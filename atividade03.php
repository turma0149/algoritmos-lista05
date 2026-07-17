<?php
/*
Atividade 03 – Categoria de filme
Um cinema deseja classificar um filme conforme sua idade mínima. 
Armazene: a idade do espectador.

Condição:
Se a idade for menor que 12 anos, exiba Filme Infantil.
Senão, se for menor que 18 anos, exiba Filme para Adolescentes.
Caso contrário, exiba Filme para Adultos.

Ao final, exiba:
Idade
Categoria
Testes: 
Para estar certo, aplique testes para ver todas as possibilidades 
aparecendo na tela: Infantil, adolescentes e adultos
*/

$idadeExpectador = 18; // testes: -100 , 3, 17 , 100 , 200

echo("Idade do expectador: " . $idadeExpectador . "<br>");

if ($idadeExpectador >= 0 && $idadeExpectador < 12) {
    echo("Categoria: Infantil");
} else if ($idadeExpectador >= 12 && $idadeExpectador < 18) {
    echo("Categoria: Adolescente");
} else if ($idadeExpectador >= 18 && $idadeExpectador <= 120) {
    echo("Categoria: Adulto");
} else {
    echo("Opção Inválida.");
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>elseif</title>
</head>
<body>
    
</body>
</html>