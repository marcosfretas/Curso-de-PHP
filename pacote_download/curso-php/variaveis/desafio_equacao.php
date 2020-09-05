<div class="titulo">Desafio Equação</div>
<?php

$seis = 6;
$tres = 3;
$dois = 2;
$cinco = 5;
$sete = 7;
$um = 1;
$dez = 10;


//$total = ((($seis * ($tres + $dois))**$dois) / ($tres * $dois));
//$total = (((($um - $cinco) * ($dois - $sete)) / 2)**2);
$total = ((((($seis * ($tres + $dois))**$dois) / ($tres * $dois)) - (((($um - $cinco) * ($dois - $sete)) / $dois)**$dois))**$tres) / (($dez)**$tres);
print $total;