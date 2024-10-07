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
    $erro = "";
    $res = 0;

    require "aux.php";

    comprobar_primer_operando();
    if (no_hay_errores()) {
        $op1 = trim($_GET['op1']);
        comprobar_no_vacio($op1, "El primer operando es obligatorio.");
        if (no_hay_errores()) {
            comprobar_no_numerico($op1, "El primer operando es un número.");
        }
    }

    comprobar_segundo_operando();
    if (no_hay_errores()) {
        $op2 = trim($_GET['op2']);
        comprobar_no_vacio($op2, "El segundo operando es obligatorio.");
        if (no_hay_errores()) {
            comprobar_no_numerico($op2, "El segundo operando es un número.");
        }
    }

    if (!empty($errores)):
        foreach ($errores as $error): ?>
            <h3><?= $error ?></h3><?php
        endforeach;
    else:

            foreach (str_split($op1) as $letra):
                foreach (str_split($op2) as $letra2):
                    if ($letra !== $letra2):
                        var_dump($letra);
                        var_dump($letra2);
                        $erro = $erro. "Las letras '". $letra. "' y '". $letra2. "' no coinciden.";

                    else:
                        $res = "todo bien";
                    endif;
                endforeach;
            endforeach;
mkdir -p  n/.local/bin mv psysh n/.local/bin





        ?>
        <p>El resultado de comparar las cadenas"<?= $op1 ?>" y  "<?= $op2 ?>" es <?= $res ?> <?= $erro ?>.</p><?php
    endif; ?>
    <a href="pala.html"><button>Volver</button></a>
</body>

</html>
