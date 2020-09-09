<div class="titulo">Operadores Lógicos</div>
<?php
echo "<p class='divisao'>V ou F</p>";
var_dump(true);
echo '<br>';
var_dump(!true);
print '<br>';
var_dump(!!true);

echo "<p class='divisao'>Tabela verdeda 'AND'</p>";

var_dump(true && true);
print '<br>';
var_dump(false && true);
//var_dump(false && ?);
print '<br>';
var_dump(true && false);
print '<br>';
var_dump(false && false);
print '<br>';
var_dump(true && 3 > 2 && 7<= 7);
print '<br>';
var_dump(true && 3 > 2 && 7<= 7 && 7 === '3');

print '<br>';

var_dump(true and true);
print '<br>';
var_dump(false and true);
print '<br>';
var_dump(true and false);
print '<br>';
var_dump(false and false);

echo "<p class='divisao'>Tabela verdeda 'OR'</p>";
var_dump(true || true);
print '<br>';
var_dump(true || false);
print '<br>';
var_dump(false || true);
print '<br>';
var_dump(false || false);

print '<br>';

var_dump(true OR true);
print '<br>';
var_dump(true OR false);
print '<br>';
var_dump(false OR true);
print '<br>';
var_dump(false OR false);

echo "<br><p class='divisao'>Tabela verdeda 'XOR'(OU Exclusivo)</p>";
var_dump(true xor true);
print '<br>';
var_dump(true xor false);
print '<br>';
var_dump(false xor true);
print '<br>';
var_dump(false xor false);
print '<br>';

echo "<p class='divisao'>EXEMPLO</p>";
$idade = 68;
$sexo = 'M';
$pagouprevidencia = true;

$podeaposentar = $pagouprevidencia && //quebrar para ficar mais fácil de lêr
(
    ($idade >= 65 && $sexo == 'M') || 
    ($idade >= 60 and $sexo == 'F')
);

if($idade >= 60 and $sexo == 'F'){
    echo "Pode se aposentar -> $sexo";
}elseif($idade >= 65 && $sexo == 'M'){
    echo "Pode se aposentar -> $sexo";
}else{
    echo "Vai ter que trabalhar mais um pouco...";
}

print '<br>ctrl + b == ver pastas';
print '<br> ctrl + d == seletionar todos os elementos';
