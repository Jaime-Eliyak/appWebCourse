<?php

$a=$_GET['a'];
$b=$_GET['b'];
while ($a <= $b) {
    if ($a % 2 != 0) {
        echo $a.' ';
    }
    $a++;
}

?>
