<?php 

    if(isset($_POST['uf']))
    {
        $UF = $_POST['uf'];
    }
    else
    {
        $UF = 0;
    }

    function calculaUf($UF)
    {
        $valorUF = 27000;
        $valorPesos = $valorUF * $UF;
        return $valorPesos;
    }

?>