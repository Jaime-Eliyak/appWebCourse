<?php

//CONDICIONALESS
//IF: SI ALGO ES VERDAD PASA ALGO. SI PONES ELSE ENTONCES PASA OTRA COSA
$a=5;
$b=9;
$c=7;
if ($a>$b) {
    echo 'a es mayor que b';
}else{
    echo 'a es menor que b';
    if ($c<$b) {
        echo ' y c es menor que b';
    }else{
        echo ' y c es mayor que b';
    }
}

echo '<br>';
$a=9;
if ($a > $b) {
    echo 'a es mayor que b';
}elseif ($a<$b) {
    echo 'a es menor que b';
}else{
    echo 'a es igual que b';
}

//OPERADORES DE COMPARACION
//== ES IGUAL 5 ES IGUAL A '5'
//=== ES IDENTICO 5 NO ES IGUAL A '5' SINO SOLO 5
//!= DIFERENTE
//<> DIFERENTE
//!== NO IDENTICO
//< MENOR
//> MAYOR
//<= MENOR O IGUAL
//>= MAYOR O IGUAL

?>