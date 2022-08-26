<?php

    require_once 'template/header.html';

    define("str_multiply","multiply");
    define("str_division","division");
    define("str_add","add");
    define("str_substract","substract");
    define("str_pow","pow");

    if(isset($_POST['submit'])){
        $number_1 = $_POST['number_1'];
        $number_2 = $_POST['number_2'];
        $operation = $_POST['operation'];
    }

    if(strcmp($operation,str_multiply) == 0){
        $result = $number_1 * $number_2;
        echo "<h1>$number_1 * $number_2 = $result</h1>";
    }

    if((strcmp($operation,str_division) == 0) && ($number_2 != 0)){
        $result = $number_1 / $number_2;
        echo "<h1>$number_1 / $number_2 = $result</h1>";
    }

    if(strcmp($operation,str_add) == 0){
        $result = $number_1 + $number_2;
        echo "<h1>$number_1 + $number_2 = $result</h1>";
    }

    if(strcmp($operation,str_substract) == 0){
        $result = $number_1 - $number_2;
        echo "<h1>$number_1 - $number_2 = $result</h1>";
    }

    require_once 'template/footer.html';
?>