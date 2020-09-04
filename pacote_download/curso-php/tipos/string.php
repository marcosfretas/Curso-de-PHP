<div class="titulo">Tipo String</div>
<?php
echo ' Eu sou uma string', '<br>';
echo (' Eu sou uma string');
echo '<br>';

var_dump("Eu Também");
echo '<br>';

//cocartenação
echo "Nós Também" . ' somos';
echo '<br>', "Também aceito", " vírgula";

echo '<br>';
echo "'Teste' " . '"teste"' . '\'Teste\'' . "\"Teste\"" . " \\";

print("<br>Também existe a função print");
print"<br>Também existe a função print";


// Algumas funções
echo '<br>' . strtoupper('maximizado');
echo '<br>' . strtolower('MINIMIZADO');
echo '<br>' . ucfirst('só a primeira letra');
echo '<br>' . ucwords('todas as palavras');
echo '<br>' . ucfirst('quantas letras? ') . strlen('Quantas letras?');
echo '<br>' . ucfirst('Eu Também ')  . mb_strlen("Eu Também", "utf-8");
echo '<br>' . substr('Só uma parte mesmo', 7,6); // começa a lêr na sétima letra, e para de na sexta letra 
echo '<br>' . str_replace('isso', 'aquilo' , 'Trocar isso'); // 1 procura a palavra, 2 palavra substituida, 3 frase da procura
