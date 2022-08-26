<?php
    require_once 'template/header.html';
?>
<form action="Resolucion-ejercicio-8-calcular.php" method="post">
    <label for="mult">Ingrese numero</label>
    <input type="text" name="number_1"> <br>
    <label for="mult">Ingrese numero</label>
    <input type="text" name="number_2"> <br>
    <label for="mult">Seleccione una operacion</label>
    <select name="operation">
        <option value="division">division</option>
        <option value="multiply">multiplicar</option>
        <option value="add">sumar</option>
        <option value="substract">restar</option>
    </select><br>
    <input type="submit" name="submit"/>
</form>
<?php
    require_once 'template/footer.html';
?>