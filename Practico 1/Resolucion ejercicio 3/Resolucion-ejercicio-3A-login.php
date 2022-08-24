<?php
if(isset($_GET['name'])) { 
    $name = $_GET['name'];
    $surname = $_GET['surname']; 
    $age = $_GET['age']; 
    echo "<h1> Envio de los datos con el metodo GET </h1>";
    echo "<p>Nombre: " . $name . "</p>";
    echo "<p>Apelligo: " . $surname . "</p>";
    echo "<p>Edad: " . $age . "</p>"; 
} 
?>

<?php
if(isset($_POST['name'])) { 
    $name = $_POST['name'];
    $surname = $_POST['surname']; 
    $age = $_POST['age']; 
    echo "<h1> Envio de los datos con el metodo POST </h1>";
    echo "<p>Nombre: " . $name . "</p>";
    echo "<p>Apelligo: " . $surname . "</p>";
    echo "<p>Edad: " . $age . "</p>"; 
} 
?>