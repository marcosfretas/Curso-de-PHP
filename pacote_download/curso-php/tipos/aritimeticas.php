<div class="titulo">Operações Aritimeticas</div>
<?php
echo 1 + 1, '<br>';
var_dump(1+1);
echo '<br>';
echo 1 + 2.5, '<br>';
var_dump(1 + 2.5);
echo '<br>';
echo 10 - 4, '<br>';
echo 2 * 8, '<br>';
echo  7 / 4, '<br>'; 
var_dump(7 / 4);
echo '<br>';
echo intdiv(7,4), '<br>'; // Função que tira as casas decimais depois da vírgula 
echo round(7 / 4), '<br>'; // Arredonda uma divisão 
echo 7 % 4, '<br>'; // Resto da divisão
echo 4 ** 2, '<br>'; // Potênicia

// Procedência de operadores:
// () => ** / * % => + -

echo 2 + 3 * 4, '<br>';  
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2 + 3) * 4) ** 2, '<br>';