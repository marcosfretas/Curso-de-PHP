<div class="titulo">Multidimensionais</div>
<?php
$dados = [
    [
        "nomes" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo",
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];
print_r($dados);
print "<br>" . $dados[0]["idade"]; /*primeiro colchete identifica a array*/  
print "<br>" . $dados[1]["idade"];
$dados[] = [ // add nova array dentro da array
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];
print "<br>" . $dados[2]["nome"];
print "<br>" . $dados[2]["idade"];

$dados[0] = [ // add nova característica
    "profissão" => "Médica"
];
print "<br>" . $dados[0]["profissão"];

unset($dados[1]);
echo "<br>";
print_r($dados);