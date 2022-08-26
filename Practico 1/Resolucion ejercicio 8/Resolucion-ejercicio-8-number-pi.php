<?php
    require_once 'template/header.html';
?>
<p> El numero pi es la relación entre la longitud de una circunferencia y su diámetro. Es una constante en geometría euclidiana. </p>
<?php
    echo "<h1> el valor del numero pi es: ". pi() ."</h1>"; //Usa una funcion para calcular el valor del numero pi, es de tipo float y es O(function pi())
    echo "<h1> el valor del numero pi es: ". M_PI ."</h1>"; //Es una constante definida por el lenguaje y es O(1) 
    
    require_once 'template/footer.html';
?>