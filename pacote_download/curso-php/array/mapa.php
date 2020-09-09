<div class="titulo">Mapa</div>
<?php
$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);
print_r($dados);
echo '<br>' . $dados["idade"];
echo '<br>' . $dados['idade'];
echo '<br>' . $dados['cor'];
echo '<br>' . $dados['peso'];
print '<br>';
$lista = array(
    "a",
    "cor" => "azul",
    8 => "oito",
    "nove" => 9,
    9,
    "olá"
);
print_r($lista);
print '<br>';
print '<br>';
$lista[] = "i";  // adicionar um elemento dentro da lista
print_r($lista);
print '<br>';
print '<br>';
$lista["cor"] = "lista"; // mudar um elemento da lista
print_r($lista);
