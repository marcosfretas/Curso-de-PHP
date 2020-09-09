<div class="titulo">If Else</div>
<?php
/*if(true)
    echo " Serei impresso?"; 
    echo " Serei impresso novamente?"; apenas a primeira sentenças */

/*
if(true)

echo "Estou de volta novamente<br>";
{
    echo "serei impresso?<br>";
    echo "serei impresso novamente?"; 
}

if(true){
    echo "serei impresso?<br>";
    echo "serei impresso novamente?<br>"; 
}
*/

if(false) // executa else
{
    echo "Verdadeiro - A<br>";  
    echo "Verdadeiro - B<br>";  
}
else
{
    echo "Falso - A<br>";
    echo "Falso - B<br>";
}
echo "Fim<br>";

if(true) // executa if
{
    echo "Verdadeiro - A<br>";  
    echo "Verdadeiro - B<br>";  
}
else
{
    echo "Falso - A<br>";
    echo "Falso - B<br>";
}
echo "Fim<br>";

if(false){ // não mostra
    echo "Passo A<br>";
}else if(false){ // não mostra
    echo "Passo B<br>";
}else{ // mostra
    echo "Último passo<br>";
}

if(false){
    echo "Tem que ser true  - A<br>";
}else{
    if(false){
        echo "Tem que ser true - B<br>";
    }else{
        echo "Aqui!!<br>";
    }
}

if(false){
    print "Passo - A";
}elseif(false){
    print "Passo - B";
}else if(false){
    print "Passo - C";
}elseif(false){
    print "Passo - D";
}else if(true){
    print "Passo - E";
}
