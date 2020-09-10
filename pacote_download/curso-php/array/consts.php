<div class="titulo">Arrays Constantes</div>
<?php
const FRUTAS = ['laranja', 'abacaxi'];
echo FRUTAS[0];
echo '<br>' . FRUTAS[1];

const carro = [
    "Fiat" => "Uno",
    "Ford" => "Fiesta"
];
print "<br>" . carro["Fiat"];

define('cidade', array("Belo Horizonte", "Recife"));
print "<br>" . cidade[0];
//cidade[0] = "Rio de Janeiro"; não funciona pois a array é uma constante