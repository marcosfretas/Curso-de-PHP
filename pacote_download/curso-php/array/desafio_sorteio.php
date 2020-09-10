<div class="titulo">Desafio Sorteio</div>
<?php
$nomes = ["Elza","rapunzel","Branca de neve","Cinderela"];

$indice = array_rand($nomes);
print "<h1 class='center'>$nomes[$indice]</h1>";
?>
<style>
    h1{
        display: flex;
        justify-content: center;
        color: blue;
        transition: 0.9s;
    }
    h1:hover{
        color: red;
    }
</style>