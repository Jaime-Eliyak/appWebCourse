<?php
    
    if (isset($_GET['hola'])) {
        $a=0;
        do {
            echo 'hola'.$a;
            $a++;
        } while ($a <= $_GET['hola']);
    }else{
        $a=0;
        while ($a <= $_GET['hola']) {
            echo 'hola'.$a;
            $a++;
        }
    }

    echo '<br>';    

    for ($i=0; $i < 100; $i++) { 
        echo $i.' ';
        if ($i>50) {
            echo 'ya se paso de 50';
            break;
        }
    }

?>