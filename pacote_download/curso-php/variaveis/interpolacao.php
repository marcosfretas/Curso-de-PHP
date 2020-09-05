<div class="titulo">Interpolação</div>
<?php
$numero = 10;
echo $numero;
echo '<br> $numero + 1'; // aspas simples não pode colocar variáveis dentro.
echo "<br> $numero + 1"; // aspas duplas pode colocar variáveis dentro.

$texto = "A sua nota é: $numero";
echo "<br> $texto";
echo '<br>' . $texto;

$objeto = 'caneta';
echo "<br> Eu tenho 5 $objetos";
echo "<br> Eu tenho 5 {$objeto}s";
echo "<br> Eu tinha 5 {$objeto}s mas perdi 3{$objeto}s";

$n1 = 2;
$n2 = 5;
$soma = $n1 + $n2;
print "<br> A soma do número {$n1} e do número {$n2} é: {$soma}";

/*Erro, não realiza a soma
echo "{$numero + 1}";*/

