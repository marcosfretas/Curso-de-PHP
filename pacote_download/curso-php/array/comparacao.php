<div class="titulo">Comparação Array</div>
<?php
$arr1 = [
    'nome' => 'Maria',
    'idade' => 20
];
$arr2 = [
    'nome' => 'Maria',
    'idade' => 20
];
var_dump($arr1 == $arr2);
var_dump($arr1 === $arr2);

print "<br>";

$arr3 = [
    'idade' => 20,
    'nome' => 'Maria'
];
var_dump($arr1 == $arr3);
var_dump($arr1 === $arr3);
print "<br>";
var_dump($arr1 != $arr3);
var_dump($arr1 !== $arr3);

print "<br>";

$arr4 = [
    'idade' => '20',
    'nome' => 'Maria'
];
var_dump($arr1 == $arr4);
var_dump($arr1 === $arr4);