<?php
    $a = 15;
    $b = 3;
    $operacion = "/";
    switch ($operacion) {
        case "+":
            $resultado = $a + $b;
            break;
        case "-":
            $resultado = $a - $b;
            break;
        case "x":
            $resultado = $a * $b;
            break;
        case "/":
            if ($b != 0) {
                $resultado = $a / $b;
            } else {
                $resultado = "No se puede dividir entre 0";
            }
            break;
        default:
            $resultado = "Error";
        }
        print $resultado;