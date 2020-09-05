<div class="titulo">Variáveis</div>
<?php
$numeroA = 13; // para criar uma variável é necessário colocar $.
echo $numeroA;
print '<br>';

var_dump($numeroA);
print '<br>';

$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
print $somaDosNumeros;
print '<br>';
echo $somaDosNumeros;

print '<br>';
echo isset($somaDosNumeros);
print '<br>';

$variavel = 10;
echo '<br>' . $variavel;
$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;
 
print '<br>';
var_dump($variavel);

//Nomes de variáveis 
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; //evitar
//$6var6 = 'invalido';
//$%var7 = 'invalido';
//$var% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
