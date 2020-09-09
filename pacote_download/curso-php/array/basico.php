<div class="titulo">Array</div>
<?php
$lista = array(1, 2, 3.4, 'texto');
echo $lista . '<br>';
var_dump($lista);
echo '<br>';
print_r($lista);
echo '<br>' . $lista[0];
echo '<br>' . $lista[1];
echo '<br>' . $lista[3];
echo '<br>' . $lista[4];  // null, porque não existe

$texto = 'Esse é um texto de teste';
echo  $texto[0];
echo  $texto[1];
echo '<br>';
print_r($texto);
