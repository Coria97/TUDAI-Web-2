<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolucion ejercicio 2</title>
</head>
<body>
    <?php
        $arr_indexado = ["item 1","item 2","item 3"];
        $arr_asociativo = array(
            "clave1" => "item 1",
            "clave2" => "item 2",
            "clave3" => "item 3"
        );
    ?>

    <h1> arreglo indexado </h1>
    <ul>
        <?php
            $length = count($arr_indexado);
            for($i=0; $i < $length; $i++){
                echo "<li>" . $arr_indexado[$i] . "</li>";
            }
        ?>
    </ul>

    <h1> arreglo asociativo </h1>
    <ul>
        <?php
            foreach($arr_asociativo as $key => $value){
                echo "<li> clave: " . $key . "  valor: " . $value . "</li>";
            }
        ?>
    </ul>
</body>
</html>