<?php 
    require_once 'template/head.html';
    $i = 1;
    $finish = 0;
    $mult = 0;
    if(isset($_GET['mult']))
        $mult = $_GET['mult'];   
?>
<body>
    <table>
        <?php 
            while($finish <= $mult){
                if($finish == 0){
                    echo "<tr> ";
                    echo "<td class = 'style0'></td>";
                    while($i <= $mult){
                        echo "<td class = 'style1'> $i </td>";
                        $i = $i + 1;
                    }
                    $i = 1;
                    echo "</tr>";
                }
            if($finish > 0){
                    echo "<tr> ";
                    echo "<td class = 'style1'> $finish </td>";
                    while($i <= $mult){
                        $result = $i * $finish;
                        if ($i == $finish)
                            echo "<td class = 'style2'> $result </td>";
                        else
                            echo "<td> $result </td>";
                        $i = $i + 1;
                    }
                    echo "</tr>";
                }
                $i = 1;
                $finish = $finish + 1;
            }
        ?>
    </table>
</body>
</html>