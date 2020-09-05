<div class="titulo">Valor vs Referência</div>
<?php
$variavel ='valor inicial';
print $variavel;

//Atribuição por valor
$variavelValor = $variavel;
print '<br>' . $variavelValor;
$variavelValor = 'novo valor';
echo "<br> $variavel";
echo " $variavelValor";

print '<br>';

// Atribuição por referência
$variavelReferencia = &$variavel; // As duas variáveis tem  o mesmo endereço/ fica armazenado no mesmo local.
echo $variavelReferencia; // = valor inicial

$variavelReferencia = 'mesma referência'; 
echo "<br> $variavel, $variavelReferencia";