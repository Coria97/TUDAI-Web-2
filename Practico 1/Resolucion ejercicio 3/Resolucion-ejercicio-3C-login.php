<?php
    if (isset($_POST['name']) && !empty($_POST['name']))
        $name = $_POST['name'];
    else 
        echo "<p> No completo el formulario </p>";

    if (isset($_POST['surname']) && !empty($_POST['surname']))
        $surname = $_POST['surname']; 
    
    if (isset($_POST['age']) && !empty($_POST['age']))
        $age = $_POST['age']; 

    echo "<p>Nombre: " . $name . "</p>";
    echo "<p>Apelligo: " . $surname . "</p>";
    echo "<p>Edad: " . $age . "</p>"; 
    
?>