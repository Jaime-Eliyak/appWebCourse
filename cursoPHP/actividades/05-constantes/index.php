<?php

//CONSTANTES
//SU VALOR NUNCA PUEDE CAMBIAR

define('nombre', 'Jaime Eliyak Torres Sanroman');
define('web', 'https://google.com');

//ASI SE IMPRIME
echo '<h1>'.nombre.'</h1>';

//CONSTANTES PREDEFINDIDAS POR PHP
//SE PUEDEN ACCEDER A ELLAS DE FORMA NORMAL

//OBTIENE EL SO QUE SE ESTA UTILIZANDO, PODSDATA AUTOCOMPLETA LOS DATOS
echo PHP_OS;
echo '<br>';
echo PHP_VERSION;

holamundotitlefunction();

//NOMBRE DE LA FUNCION
function holamundotitlefunction(){
    echo __FUNCTION__;
}

?>