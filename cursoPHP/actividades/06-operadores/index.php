<?php
//OPERADORES ARITMECTICOS
$a=15;
$b=5;

echo 'suma: '.($a+$b).'<br>';
echo 'resta: '.($a-$b).'<br>';
echo 'multiplicacion: '.($a*$b).'<br>';
echo 'division: '.($a/$b).'<br>';
//DIVIDE EL NUMERO A ENTRE EL NUMERO B Y NOS DEVUELVE EL RESTO DE LA DIVISION
$b=4;
echo 'Resto: '.($a%$b).'<br>';

//OPERADORES DE INCREMENTO Y DECREMENTO
$year= 2019;
echo '<h1>'.$year.'</h1>';
//INCREMENTO
// $YEAR +1
$year++;
echo '<h1>'.$year.'</h1>';
//DECREMENTO
// $YEAR -1
$year--;
echo '<h1>'.$year.'</h1>';
//PRE-INCREMENTO
// 1+$YEAR 
++$year;
echo '<h1>'.$year.'</h1>';
//PRE-DECREMENTO
// -1+$YEAR
--$year;
echo '<h1>'.$year.'</h1>';

//OPERADORES DE ASIGNACION
// SON PARA HACER OPERACIONES CON VALORES ESTABLECIDOS POR EL USUARIO
//$year+$centena
//LO MISMO SE PUEDE HACER CON LAS DIFERENTES FORMADE DE INCREMENTO, DECREMENTP, PRE-INCREMENTO, PRE-DECREMENTO

$centena=100;
$year+=$centena;
echo '<h1>'.$year.'</h1>';
//TAMBIEN SE PUEDE HACER CON NUMEROS DIRECTOS
$year-=50;
echo '<h1>'.$year.'</h1>';




?>