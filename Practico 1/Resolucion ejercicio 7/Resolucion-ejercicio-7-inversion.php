<?php 
    require_once 'template/head.html';
    define("porcentaje","0.15");
    if(isset($_GET['inv']))
        $inv = $_GET['inv'];   
?>


<body>
    <?php 
        $i = 1;
        $month = 12;
        $last_month = $inv;
        echo "<h1> su inversion es de $inv y tiene un porcentaje de ganancia de " . porcentaje . "</h1>";
        echo "<table>";
            echo "<tr> ";
            while($i <= $month){
                echo "<td class= 'style'> MES $i </td>";
                $i = $i + 1;
            }
            echo "</tr>";
            $i = 1;
            echo "<tr> ";
            while($i <= $month){
                $last_month = $last_month + $last_month * porcentaje;
                echo "<td>" . round($last_month,2) . "</td>";
                $i = $i + 1;
            }
            echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>