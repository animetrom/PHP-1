<?php 
/*========================================================================*/
// TIPOS BÁSICOS

// STRING(TEXTO)
$nome = "Senac VPR";
$site = 'www.sp.senac.br';

//  INT(INTEIROS OU NÚMEROS)
$ano = 1988;
$idade = 30;

// PONTO FLUTUANTE(COM CASAS DECIMAIS)
$salario = 5500.99;
$saldoContaCorrente = 10000.05;
$valorCheque = 1200.50;

// BOOLEANO(VERDADEIRO OU FALSO)
$bloqueado = false;
/*========================================================================*/
//TIPOS COMPOSTOS

// ARRAY(IMAGINE QUE TEMOS UMA CAIXA ONDE 
// ORGANIZAMOS OS ITENS QUE QUEREMOS, UM ARRAY FAZ EXATAMENTE ISSO)
$frutas = array("Abacaxi", "Laranja", "Manga", "Uva", "Banana");
echo $frutas[4]; // CASO EU QUEIRA TRAZER 
// O VALOR DO ARRAY CORRESPONDENTE A BANANA

echo "<br/>";
// OUTRO EXEMPLO DE ARRAY - PARAR FIXAÇÃO DO CONCEITO
$carros = array("Fiesta", "Edge", "Tucson", "XC60", 
	"TR4", "Celta", "Astra", "Vectra", "Kombi", "Fusca", "Brasilia");
echo $carros[5]; // VAMOS MOSTRAR NA TELA O VALOR 
				// DO ARRAY CORRESPONDENTE AO CARRO________

echo "<br/>";

// OBJETO
$nascimento = new DateTime();
var_dump($nascimento);
echo "<br/>";
/*========================================================================*/
// TIPOS ESPECIAIS

// RESOURCE 
$arquivo = fopen("07_tipos_de_dados.php", "r");

var_dump($arquivo);

// NULL
$nulo = NULL;
$vazio = "";

// NULL é diferente de VAZIO
// IMAGINE QUE O VAZIO É O AR
// ENQUANTO O NULL É O ESPAÇO ONDE O AR É NULO

/*========================================================================*/
?>
