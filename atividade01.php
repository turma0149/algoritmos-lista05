<?php
/*Atividade 01 – Cor do semáforo
Um motorista deseja saber como agir de acordo com a cor do semáforo. Armazene:
a cor do semáforo.

Condição:
Se a cor for "verde", exiba Siga.
Senão, se for "amarelo", exiba Atenção.
Caso contrário, exiba Pare.

Ao final, exiba:
Cor informada - ex: echo(“Cor informada:” . $corSemaforo . “<br>”);
Situação - echo(“Situação:” . $situacao . “<br>”);

Testes: 
É parte da função de programador testar todas as possibilidades dadas. Neste exercício:  
aplique à variável $corSemaforo o valor “verde” para ver a saída Siga;
aplique à variável $corSemaforo o valor “amarelo” para ver a saída Atenção;
aplique à variável $corSemaforo o valor “vermelho” para ver a saída Pare
*/

$corSemaforo = "Azul"; //testar todas opções possíveis

if($corSemaforo == "Verde"){
    echo ("SIGA!");
} elseif ($corSemaforo == "Amarelo") {
    echo ("ATENÇÃO!");
} else if ($corSemaforo == "Vermelho"){
    echo ("PARE!");
} 
else {
    echo ("Opção inválida! Tente novamente! :) ");
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