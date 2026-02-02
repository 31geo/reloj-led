<?php 
date_default_timezone_set("America/Lima");

// Hora 12 horas
$hora = date("h:i:s A");

// Componentes por separado
$diaSemana = date("l");
$diaNum    = date("d");
$mes       = date("F");
$anio      = date("Y");

// Traducción
$buscar = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday",
           "January","February","March","April","May","June","July","August","September","October","November","December"];

$reemplazar = ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo",
               "Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

$diaSemana = str_replace($buscar, $reemplazar, $diaSemana);
$mes = str_replace($buscar, $reemplazar, $mes);

// Armado FINAL
$fecha = "$diaSemana, $diaNum de $mes del $anio";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reloj LED</title>
    <meta http-equiv="refresh" content="1">

    <style>
        body {
            margin: 0;
            padding: 0;
            background: #000;
            color: #fff;
            text-align: center;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container { text-align: center; }
        .hora {
            font-size: 90px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #ff0000;
        }
        .fecha {
            font-size: 40px;
            margin-bottom: 20px;
            color: #bbbbbb;
        }
        .titulo {
            font-size: 45px;
            margin-top: 20px;
            letter-spacing: 3px;
            color: yellow;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="hora"><?= $hora ?></div>
    <div class="fecha"><?= $fecha ?></div>
    <div class="titulo">INGEDIG Ingeniería Digital</div>
</div>
</body>
</html>
