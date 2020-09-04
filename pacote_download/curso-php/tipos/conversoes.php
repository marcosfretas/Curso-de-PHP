<div class="titulo">Conversões</div>
<?php
echo is_int(PHP_INT_MAX);

// int para float
echo  '<br>';
var_dump(PHP_INT_MAX + 1);
print '<br>';
var_dump((float) 5);
print '<br>';
var_dump(1 + 1.0);
print '<br>';

// float para int
echo '<p>Float para int</p>';
var_dump((int)6.6);
print '<br>';
var_dump(intval(2.8, 10));
print '<br>';
var_dump(intval('0101011101', 2)); // transforma  número bunario em decimal
print '<br>';
var_dump((int)round(2.8));

//Operação com string 
echo '<p>String</p>';
var_dump(3 + "2"); // soma
print '<br>';
var_dump("3" + 5);
print '<br>';
var_dump("3" . 5);
echo '<br>', is_string("3" . 5);
echo '<br>', is_string("3" + 5);
print '<br>';
var_dump(1 + "cinco");
print '<br>';
var_dump(1 . " cinco");
print '<br>';
var_dump(1 + "5 cinco");
echo '<br>';
var_dump(1 + "3 + 2");
print('<br>');
var_dump((int)"3.2");