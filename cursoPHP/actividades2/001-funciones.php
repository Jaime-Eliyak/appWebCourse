<?php

    function mifuncion(){
        echo 'Jaime Eliyak ';
        for ($i=0; $i < 10; $i++) { 
            echo $i;
        }
    }

    //CUANDO SE AGREGAR UN PARAMETRO CON UN VALOR ESTE VALOR SERA DEAFULT Y POR TANTO NO SERA NECESARIO MANDARLE EL PARAMETRO
    function miMultiplicacion($numero,$numero2=10){
        echo ' '.$numero*$numero2;
    }

    mifuncion();
    miMultiplicacion(4,4);
?>