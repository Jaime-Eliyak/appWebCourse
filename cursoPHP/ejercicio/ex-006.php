<?php
    echo '<table border="1px solid">';
    echo '
        <tr>
            <td>Num1</td>
            <td>Operacion</td>
            <td>Num2</td>
            <td>Resultado</td>
        </tr>
    ';

    for ($i=1; $i <= 10; $i++) { 
        for ($j=1; $j <= 10; $j++) { 
            $res=$i*$j;
            echo "
            <tr>
                <td>$i</td>
                <td>x</td>
                <td>$j</td>
                <td>$res</td>
            </tr>
        ";
        }
        echo '<tr><td></td></tr';
    }

?>
