<div class="titulo">Operações</div>
<?php
$dados = [
    "nome" => "Jose",
    "idade" => 28
];
$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados  + $dados2;
print_r($dadosCompletos);
echo '<br>' . is_array($dadosCompletos);
echo '<br>' . count($dadosCompletos); // quantos elementos a array tem 
$indice = array_rand($dadosCompletos); // pega itens aleatorios dentro da array
echo "<br> $indice = $dadosCompletos[$indice]";
echo "<br> {$dadosCompletos['idade']}";
echo "<br> ${dadosCompletos['idade']}";
print "<br>";

unset($dadosCompletos["nome"]); // apagar item da array
print_r($dadosCompletos);


unset($dadosCompletos); // apagou toda a array
print "<br>";
print_r($dadosCompletos);
var_dump($dadosCompletos);

print "<br>";

$impar = [1, 3, 5, 7, 9];
$par = [0, 2, 4, 6, 8];
$numero = $impar + $par; // não funciona
print_r($numero);
echo '<br><br>';
$numero = array_merge($impar, $par);
print_r($numero);

sort($numero); // ordena a array 1, 2, 3, 4, 5, 6, 7, 8, 9
echo "<br><br>";
print_r($numero);