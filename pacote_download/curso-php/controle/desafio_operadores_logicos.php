<div class="titulo">Desafio Operadores Lógicos</div>
<!--
    Dois trabalhos => terça e quinta!
    -- Se os dois forem executados -> TV 50 e sorvete!
    -- Se apenas um  fo executados -> TV 32 e sorvete!
    -- Se nehum for executados -> Fica em casa!
-->
<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (terça-feira):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta-feira):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size:1.8rem;
    }
</style>

<?php

$t1 = $_POST['t1'] === '1';
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete = false;

if($t1 && $t2){
    $tv = '50"';
}elseif($t1 xor $t2){
    $tv = '32"';
}

if($t1 or $t2){
    $sorvete = true;
}

if($tv){
    $resultado = "Vamos comprar uma TV de $tv";
}else{
    $resultado = "Sem TV dessa vez";
}

$saudavel = !$sorvete;

if($saudavel){
    $resultado = '<br>Estamos saudáveis';
}else{
    $resultado .= '<br>Sorvete liberado';
}
echo "<p>$resultado<br>";


