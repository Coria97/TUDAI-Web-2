<?php
    $arr_imc = [18.5 , 24.99 , 30];
    $weight = 0;
    $height = 0;

    if(isset($_GET['weight']))
        $weight = $_GET['weight'];
    if(isset($_GET['height'])) 
        $height = $_GET['height'];

    $imc = $weight / $height;

    if ($imc < $arr_imc[0]) 
        echo "<h1> su imc es   $imc   y su estado es: bajo peso </h1>";
    elseif ($imc >= $arr_imc[0] && $imc < $arr_imc[1]) 
        echo "<h1> su imc es   $imc    su estado es: normal </h1>";
        elseif ($imc >= $arr_imc[1] && $imc < $arr_imc[2]) 
            echo "<h1> su imc es   $imc    su estado es: sobrepeso </h1>";
        else
            echo "<h1> su imc es   $imc    su estado es: obesidad </h1>";
?>