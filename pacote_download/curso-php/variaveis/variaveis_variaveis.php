<div class="titulo">Variáveis Variáveis</div>
<?php
$a = 'valorA';
$$a = 'valorAA';
echo "$a, {$$a}, {$valorA}";

print '<br>';

$epa = 'opa';
$opa = 'vish';
$vish = 'eita';
print "$epa, {$$epa}, {$$$epa}";