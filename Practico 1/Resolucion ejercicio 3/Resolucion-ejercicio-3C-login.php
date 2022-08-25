<?php
    if (!empty($_REQUEST)){
        $name = $_REQUEST['name'];
        $surname = $_REQUEST['surname']; 
        $age = $_REQUEST['age']; 
        echo "<p>Nombre: " . $name . "</p>";
        echo "<p>Apelligo: " . $surname . "</p>";
        echo "<p>Edad: " . $age . "</p>"; 
    }
?>