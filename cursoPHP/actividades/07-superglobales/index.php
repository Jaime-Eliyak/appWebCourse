<?php
//VARIABLES SUPERGLOBALES
//VARIABLES DISPONIBLES QUE ESTAN DISPONIBLES EN TODO LOS AMBITOS DE UN SCRIPT O UN AMBITO PHP

//VARIABLE DE SERVIDOR
//PARA OBTENER LA DIRECCION IP: SI USAS TU IP ES DISTINGUIBLE
echo '<h1>'.$_SERVER['SERVER_ADDR'] .'</h1>';

//PARA OBTENER EL DOMINIO
echo '<h1>'.$_SERVER['SERVER_NAME'] .'</h1>';

//SERVIDOR WEB
echo '<h1>'.$_SERVER['SERVER_SOFTWARE'] .'</h1>';

//NAVEGADOR WEB QUE USAS
echo '<h1>'.$_SERVER['HTTP_USER_AGENT'] .'</h1>';

//OBTENER IP
echo '<h1>'.$_SERVER['REMOTE_ADDR'] .'</h1>';

var_dump($_SERVER);

?>