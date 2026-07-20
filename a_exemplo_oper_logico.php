<?php
/*
 && (E - AND)
 || (OU - OR)
 ! (NEGAÇÃO - NOT - AO CONTRÁRIO)
*/

// Exemplo operador AND (&&)
// Precisa das duas ou mais condições verdadeiras

$idade = rand(0, 30);
$carteira = true;

if ($idade >= 18 && $carteira == true) {
    echo ("Pode dirigir");
} else {
    echo ("Não pode dirigir");
}

echo ("<br>" . str_repeat("--", 30));

// Exemplo operador OR (||)
// Precisa de APENAS UM DAS condições verdadeira

$idade = rand(55, 70);
$comCrianca = rand(0, 1);

echo ("<br> Idade: " . $idade . "<br>");
echo ("Com criança: " . $comCrianca . "<br>");

if ($idade >= 60 || $comCrianca == true) {
    echo ("Tem prioridade");
} else {
    echo ("Não tem prioridade");
}

echo ("<br>" . str_repeat("--", 30));

// Exemplo operador NOT (!)
// Inverte o valor : Se true, vira false. Ou ao contrário

$logado = rand(0,1); 

echo ('<br> if(!$logado) : ' . $logado . "<br>");

if(!$logado) {
    echo ("Faça login.");
}

echo ("<br>" . str_repeat("--", 30));

// Operador ternário 

$total = rand(0,20); 
$resultado = $total >= 10 ? "Aprovado" : "Reprovado";
echo("<br>Resultado: " . $resultado);
