<?php
    $tam = 0;
    if(isset($_GET['tam'])) { 
        $tam = $_GET['tam'];
    }
    $arr = array();
    for($i=0; $i < $tam; $i++){
        $arr[] = "item" . $i;
    }
?>
<?php 
    echo "<h1> Mostrando los primeros " . $tam . " elementos </h1>" 
?> 
<ul>
    <?php
        $length = count($arr);
        for($i=0; $i < $length; $i++){
            echo "<li>" . $arr[$i] . "</li>";
        }
    ?>
</ul>
