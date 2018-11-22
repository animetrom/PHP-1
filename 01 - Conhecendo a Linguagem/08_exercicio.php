<?php 
/*
# MISSÃO
Criar variáveis para nome, sobrenome, idade, cidade onde mora e concatenar os valores para que fique da seguinte forma:

"Olá, me chamo _______________, tenho ____ anos de idade e moro na cidade de_________________."
*/

$nome = "Adriano";
$sobrenome = " Leite da Silva";
$idade = 30;
$cidade = "São Paulo";

$nomeCompleto = $nome . " " . $sobrenome;

echo "Olá, me chamo <strong>" . $nomeCompleto . "</strong>, tenho <strong>" . $idade . "</strong> anos de idade e moro na cidade de <strong>" . $cidade ."</strong>."; 
?>
