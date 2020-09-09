<div class="titulo">Operadores Relacionais</div>
<?php
var_dump(1 == 1);
print "<br>";
var_dump(1 < 0);
print "<br>";
var_dump(1 > 0);
print "<br>";
var_dump(1 == 0);
print "<br>";
var_dump(1 >= 0);
print "<br>";
var_dump(1 != 0);
print "<br>";
var_dump(1 != 1);

print "<br>";

var_dump(1 == '1');
var_dump(1 === '1'); // compara sua instrutura (tipo da variável)
var_dump(1 !== '1');

echo "<br><h3>Relacionais no if/else</h3>";
$idade = 80;
if($idade < 18){
    echo "Menor de idade = $idade anos!<br>";
}elseif($idade < 65){
    print "Adulto = $idade anos!<br>";
}elseif($idade >= 65){
    print "Meia idade = $idade anos!<br>";
}

echo "<br><p class='divisao'>Spaceship</p>";
var_dump(5<=>3);
print "<br>";
var_dump(50<=>50);
print "<br>";
var_dump(2<=>3);

echo "<br><h3>Valores podem ser V ou F</h3>";
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>
<style>
    h3{
        margin: 0px;
    }
</style>