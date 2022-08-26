<?php
    require_once 'template/header.html';

    $name = "santiago";
    
    if(isset($_GET['name'])) { 
        $name = $_GET['name'];
    }
    
    echo "<h1> Esta pagina fue desarrolada por $name </h1>";
    
    require_once 'template/footer.html';
?>