<?php

echo ("<h1> Quiz do Chaves (V ou F) </h1>");

echo ("<ol>");
echo ("<li> O Chaves mora em um barril. </li>");
echo ("<li> A Chiquinha é filha do Seu Madruga. </li>");
echo ("<li> O Quico mora na casa da Bruxa do 71. </li>");
echo ("<li> O Senhor Barriga é dono da vila. </li>");
echo ("<li> O Professor Girafales trabalha na escola da vila. </li>");
echo ("<li> O Chaves sempre come sanduiche de presunto. </li>");
echo ("<li> A Dona Florinda é casada com o Seu Madruga. </li>");
echo ("<li> O Nhonho é filho do Senhor Barriga. </li>");
echo ("<li> O Chave usa um boné vermelho. </li>");
echo ("<li> A Bruxa do 71 é apaixonada pelo Seu Madruga. </li>");
echo ("</ol>");

//Respostas do competidor (aleatórias com rand)

$p1 = rand(0, 1);
$p2 = rand(0, 1);
$p3 = rand(0, 1);
$p4 = rand(0, 1);
$p5 = rand(0, 1);
$p6 = rand(0, 1);
$p7 = rand(0, 1);
$p8 = rand(0, 1);
$p9 = rand(0, 1);
$p10 = rand(0, 1);

echo ("<h1> Respostas do competidor </h1>");

echo ("P1:" . $p1 . "<br>");
echo ("P2:" . $p2 . "<br>");
echo ("P3:" . $p3 . "<br>");
echo ("P4:" . $p4 . "<br>");
echo ("P5:" . $p5 . "<br>");
echo ("P6:" . $p6 . "<br>");
echo ("P7:" . $p7 . "<br>");
echo ("P8:" . $p8 . "<br>");
echo ("P9:" . $p9 . "<br>");
echo ("P10:" . $p10 . "<br>");
