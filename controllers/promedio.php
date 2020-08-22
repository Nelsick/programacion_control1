<?php

if(isset($_POST['n1']))
{
    $num1 = $_POST['n1'];
    
    $num2 = $_POST['n2'];

    $num3 = $_POST['n3'];
}
else{
    $num1 = 0;
    
    $num2 = 0;

    $num3 = 0;
}

function promedio ($num1,$num2,$num3){
    $prom = ($num1 + $num2 + $num3)/3;
    return $prom;
}

if(isset($_POST['calculo']))
{
    promedio($num1,$num2,$num3);
}

?>