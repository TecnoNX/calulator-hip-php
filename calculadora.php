<?php

if ($_POST) {

    $valor = $_POST['valor'];
    $pago = $_POST['pago'];
    $tasa = $_POST['tasa'];
    $meses = $_POST['meses'];

    $interes = ($tasa/100)*$valor/$meses;

    $pagototal =$valor - $pago;

    $mes = $pagototal / $meses + $interes;

    $anticipo = $interes * $meses + $valor;

    $hipoT = $mes * $meses;

    $timepago = $meses / 12;

    
    
    echo "<p>Pago Mensual: "."RD$".$mes." amortizado en ".$timepago."años</p><br>";

    echo "<p>Para una hipoteca de "."RD$".$pagototal."</p><br>";

    echo "<p>Hipoteca: "."RD$".$mes."</p><br><br>";

    echo "<p>Hipoteca Total con el interes "."RD$".$hipoT."</p><br>";

    echo "<p>Total con Anticipo: "."RD$".$anticipo."</p><br><br>";
    
}
