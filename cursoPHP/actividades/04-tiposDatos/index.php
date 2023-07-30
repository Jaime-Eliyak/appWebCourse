<?php

//float
$a=14.55;

//string
$a="hola soy un string";

//boolean
$a=true;//true, false, 0, 1

//null
$a=null;

//array
$a=["aaaa","1",3];

//entero
$a=14;

//objetos
/////ejemplo seria de otra clase

//forma de obtener que tipo de datos es
echo gettype($a);

//NOTAS
//LAS VARIABLES NUNCA PUEDEN EMPEZAR CON NUMEROS
//LAS VARIABLES NO PUEDEN USAR - (GUION)
//NO SE PUEDE USAR OPERADORES
//NO DEBERIAN USARSE Ñ

//DEBUGEAR para saber caracteristicas de lineas
var_dump($a);

//NOTA PERRONAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
//Si usas comillas dobles te permite usar el string y al mismo tiempo una variable sin cerrar las comillas, comillas simple se utiliza texto, se tarda mas las comillas dobles asi que recomendable usar comillas simples
$ejemplo="Yo tengo $a ideas, \n me la pela";
echo $ejemplo;

//la \n es para hacer salto de linea solo sirve a nivel de consola, como los tab, etc pero serviria para scripts

?>