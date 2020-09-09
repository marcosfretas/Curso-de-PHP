<div class="titulo">Switch</div>
<?php
$categoria = 'Luxo';
$preco = 0.0;
$carro = '';

if($categoria === 'Luxo'){
    $carro = 'Mercedes';
    $preco = 2500000;
}elseif($categoria === 'suv'){
    $carro = 'Renegade';
    $preco = 800000;
}elseif($categoria === 'Sedan'){
    $carro = 'Etios';
    $preco = 55000;
}else{
    $carro = 'Mobi';
    $preco = 33000;
}
$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $preco</p>";


$categoria = 'luxo';
switch($categoria){
    case 'Luxo':
    case 'luxo':
        $carro = 'Mercedes';
        $preco =  2500000;
    break;
    case 'suv':
    case 'SUV':
        $carro ='Renegade';
        $preco = 800000;
    break;
    case 'Sedan':
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
    break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
    break;
}
$precoFomatado = number_format($preco, 2, ',', '.');
print "<p>Carro: $carro<br>Preço: R$$precoFormatado</p>";