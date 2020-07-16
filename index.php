<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="custom.css">
    <title>Calculadora de hipotecaria</title>
</head>
<body>
    <div class="form">
    <h1>Calculadora hipotecaria.</h1>
    <div class="camp">
   
    <form action="#" method="post">
    <h4>Valor del inmueble</h4>
    <input type="text" name="valor" id="" placeholder="Valor del inmueble">

    <h4>Pago Inicial</h4>
    <input type="text" name="pago" id="" placeholder ="Pago Inical">

    <h4>Tasa de Interes (%)</h4>
    <input type="text" name="tasa" id="" placeholder= "Interes">

    <h4>Periodo de amortizacion (meses)</h4>
    <input type="text" name="meses" id="" placeholder="Periodo de amortizacio en meses"><br><br>

    <input class="boton" type="submit" value="Calcular" >
    </form>

    </div>

    </div>

    <div class="resultados">
    
    <?php
    require_once "calculadora.php";
    ?>
    </div>
</body>
</html>