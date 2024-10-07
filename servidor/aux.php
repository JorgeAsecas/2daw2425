<?php

function comprobar_parametro($par, $mensaje)
{
    global $errores;

    if (!isset($_GET[$par])) {
        $errores[] = $mensaje;
    }
}

function comprobar_no_vacio($cadena, $mensaje,)
{
    global $errores;

    if ($cadena == '') {
        $errores[] = $mensaje;
    }
}

function comprobar_no_numerico($numero, $mensaje)
{
    global $errores;

    if (is_numeric($numero)) {
        $errores[] = $mensaje;
    }
}

function no_hay_errores()
{
    global $errores;
    return empty($errores);
}

function comprobar_primer_operando()
{
    comprobar_parametro('op1', "Falta el primer operando.");
}

function comprobar_segundo_operando()
{
    comprobar_parametro('op2', "Falta el segundo operando.");
}


?>
