<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body>
    <?php
    $errores = [];

    require "auxiliar.php";

    comprobar_primer_operando();
    if (no_hay_errores()) {
        $op1 = trim($_GET['op1']);
        comprobar_no_vacio($op1, "El primer operando es obligatorio.");
        if (no_hay_errores()) {
            comprobar_numerico($op1, "El primer operando no es un número.");
        }
    }

    comprobar_segundo_operando();
    if (no_hay_errores()) {
        $op2 = trim($_GET['op2']);
        comprobar_no_vacio($op2, "El segundo operando es obligatorio.");
        if (no_hay_errores()) {
            comprobar_numerico($op2, "El segundo operando no es un número.");
        }
    }

    comprobar_operacion();
    if (no_hay_errores()) {
        $op = trim($_GET['op']);
        comprobar_no_vacio($op, "La operación es obligatoria.");
        if (!in_array($op, ['+', '-', '*', '/'])) {
            $errores[] = "Operación incorrecta.";
        } elseif ($op == '/' && $op2 == '0') {
            $errores[] = "No se puede dividir entre cero.";
        }
    }

    if (!empty($errores)):
        foreach ($errores as $error): ?>
            <h3><?= $error ?></h3><?php
        endforeach;
    else:
        switch ($op):
            case '+':
                $res = $op1 + $op2;
                break;
            case '-':
                $res = $op1 - $op2;
                break;
            case '*':
                $res = $op1 * $op2;
                break;
            case '/':
                $res = $op1 / $op2;
                break;
        endswitch; ?>
        <p>La operación <?= $op1 ?> <?= $op ?> <?= $op2 ?> vale <?= $res ?>.</p><?php
    endif; ?>
    <a href="calcu.html"><button>Volver</button></a>
</body>

</html>
