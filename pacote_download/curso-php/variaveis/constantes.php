<div class="titulo">Constantes</div>
<?php
define('TAXA_DE_JUROS', 5.9);
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;
echo '<br>' . NOVA_TAXA;

const NOVISSIMA_TAXA = 2.5 +1.2;
echo '<br>' . NOVISSIMA_TAXA;

echo '<br> Linha' . __LINE__; //Mostra a linha de código que está.
echo '<br>' . __FILE__; // Mostra o arquivo que está sendo utilizado. 
echo '<br>' . __DIR__; //  Mostra a pasta que está sendo utilizado guardado o arquivo.