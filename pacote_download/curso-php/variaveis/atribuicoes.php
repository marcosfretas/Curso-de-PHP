<div class="titulo">Atribuições</div>
<?php
$Stitle = 'Atribuições';
print '<br>';
$numero = 10;
echo '<br>' . $numero;
$numero = $numero - 1;
print '<br>';
echo $numero;
print '<br>';
$numero = $numero + 1.5;
echo $numero;
$numero--; // decreta uma unidade, tira uma unidade do valor da variável(válido apenas por variáveis, não pode colocar números).
echo '<br>' . $numero;
--$numero; // numero = numero -1
echo '<br>' . $numero;
++$numero; // numero = numero +1
echo '<br>' . $numero;
$numero++;
echo '<br>' . $numero;
$numero = 20;
echo '<br>' . $numero;
$numero -= 5; // tira 5 unidades dentro da variável.
echo '<br>' . $numero;
$numero += 5;
echo '<br>' . $numero;
$numero *= 5;
echo '<br>' . $numero;
$numero /= 5;
echo '<br>' . $numero;
$numero **= 5;
echo '<br>' . $numero;
$numero %= 5;
echo '<br>' . $numero;

$texto = 'Este é um texo';
$texto = $texto . ' qualquer';
$texto .= ' de verdade';
echo '<br>' . $texto;

$variavelinexistente = 'valor inexistente';
echo '<br>' . $variavelinexistente;
$valor = $variavelinexistente ?? 'valor default'; // se a variável não existir mostra essa mensagem.
echo '<br>' . $valor;
