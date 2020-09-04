<div class="titulo">Tipo Booleano</div>
<?php
echo true;
echo '<br>';
echo false; // não mostra nada no browser
echo '<br>', var_dump(true);
echo '<br>', var_dump(false);
echo '<br>', is_bool(false);
echo '<br>', is_bool('false'); // valor falso

//fazer as regras de conversões
echo '<p>Regras:</p>', '<br>';
echo '<br>' . var_dump((bool) 0); // apenas o zero será falso dos números
echo '<br>' . var_dump((bool)'marcos');
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -5);
echo '<br>' . var_dump((bool)''); // valor falso
echo '<br>' . var_dump((bool)'0'); //valor falso
echo '<br>' . var_dump((bool)'00');
echo '<br>' . var_dump((bool)!0);
echo '<br>' . var_dump((bool)!'false');
echo '<br>' . var_dump((bool)!!'false');