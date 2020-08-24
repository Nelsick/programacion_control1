<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/IACC/Ciclo 3/Semana1/styles/styles.css">
    <title>Evaluación 1</title>
</head>
<body>

    <?php
        $trabajador = [
            ["Maria Luisa Rojas", "8 am a 3 pm", "Produccion"],
            ["Jose Perez Marquez", '3 pm a 10 pm', 'Seguridad'],
            ['Catalina Donoso Correa', '10 pm a 6 am', 'Produccion'],
            ['Raul Lavin', '8 am a 3 pm', 'Produccion'],
            ['Jose Luis Venegas', '3 pm a 10 pm', 'Logistica']
        ];
    ?>

    <nav>
        <h1> Control semana 1 </h1>
    </nav>

    <h2> Pregunta 1 - Horarios personales </h2>

    <div class="container">

        <table>
            <caption> Horarios </caption>
            
            <colgroup>
                <col>
                <col>
                <col>
            </colgroup>
            <thead>
                <tr>
                    <th>TRABAJADOR</th>
                    <th>HORARIO</th>
                    <th>DEPARTAMENTO</th>
                </tr>
            </thead>
            <tbody>
               
                <?php 

                    foreach( $trabajador as list($a, $b, $c)) {
                        echo "<tr>
                            <td>$a</td>
                            <td>$b</td>
                            <td>$c</td>
                        </tr>";
                    }
                ?>

            </tbody>
        </table>

    </div>


    <hr>

    <h2> Pregunta 2 - Calculadora de promedios</h2>

    <?php require_once './controllers/promedio.php' ?>

    <div class="formulario">
        <form action="index.php" method="POST">
            <label for="n1"> Número 1</label>
            <input type="text" id="n1" name="n1" placeholder="Ingresa tu primer número" value="<?php echo $num1 ?>" required>
            <label for="n2"> Número 2</label>
            <input type="text" id="n2" name="n2" placeholder="Ingresa tu segundo número" value="<?php echo $num2 ?>" required>
            <label for="n3"> Número 3</label>
            <input type="text" id="n3" name="n3" placeholder="Ingresa tu tercer número" value="<?php echo $num3 ?>" required><br />
            <button type="submit" name="calculo">Calcular</button>
        </form>

        <div class="resultado">
            <?php echo "Tu promedio es: ", promedio($num1,$num2,$num3) ?>
        </div>
    </div>

    <hr>

    <h2> Pregunta 3 - Calculadora de UF </h2>

    <div class="formulario">

        <?php require_once './controllers/ufcalculator.php' ?>

        <form action="index.php" method="POST">
            <label for="uf"> Valor en UF </label>
            <input type="text" id="uf" name="uf" placeholder="Ingrese la cantidad de UF" value="<?php echo $UF ?>" required>
            <button type="submit" name="CalcularUf">Calcular</button> 
        </form>

        <div class="resultado">
              <?php echo "El valor del producto es: ", calculaUf($UF) ?>      
        </div>
    </div>


</body>
</html>