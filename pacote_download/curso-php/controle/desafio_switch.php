<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="Km-milha">KM > Milha</option>
        <option value="milha-Km">Milha > KM </option>
        <option value="metro-Km">Metro > KM </option>
        <option value="Km-metro">KM > Metros</option>
        <option value="graus-fahren">graus > fahren</option>
        <option value="fahren-graus">fahren > graus</option>
    </select>
    <button>Calcular</button>
</form>
<style>
    form >  *{
        font-size: 1.8rem;
    }
</style>
<?php

const  FATOR_KM_MILHA = 0.621371;
const  FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0;
switch($_POST['conversao']){
    case 'Km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param KM = $distancia Milhas";
    break;
    case 'milha-Km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha = $distancia KM";
    break;
    case 'metro-Km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = "$param metro = $distancia KM";
    break;
    case 'Km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param KM = $distancia metros";
    break;
    case 'graus-fahren':
        $grausparafah = ($param - 32) / 1.8;
        $mensagem = "$param C° é equivalente a $grausparafah F° ";
    break;
    case 'fahren-graus':
        $fahparagraus = ($param * 1.8) + 32;
        $mensagem = "{$param}F° é equivalente a {$fahparagraus}C°";
    break;
    default:
        $mensagem = "Nenhum valor encontrado";
}
echo "<p>$mensagem</p>";