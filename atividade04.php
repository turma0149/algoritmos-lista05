<?php

/*
Atividade 04 – Faixa etária
Crie um programa que classifique uma pessoa conforme sua idade.
Armazene: nome e idade.

Condição:
até 11 anos → Criança
até 17 anos → Adolescente
até 59 anos → Adulto
acima disso → Idoso

Ao final, exiba:
Nome
Idade
Classificação

Testes: 
Para estar certo, aplique testes para ver todas as possibilidades aparecendo na tela: Criança, Adolescente, Adulto, Idoso. 
*/

$nome = "Michelle";
$idade = 200; // -100, 2 , 15, 18, 72 , 200

echo "Nome: $nome <br>";
echo "Idade: $idade anos <br>";

if ($idade >= 0 && $idade < 12) {
    echo ("Categoria: Infantil");
} else if ($idade >= 12 && $idade <= 17) {
    echo ("Categoria: Adolescente");
} else if ($idade >= 18 && $idade <= 59) {
    echo ("Categoria: Adulto");
} else if ($idade >= 60 && $idade <= 120) {
    echo ("Categoria: Idoso");
} else {
    echo ("Opção Inválida.");
}
