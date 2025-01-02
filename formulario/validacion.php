<?php
// Validación de datos de formularios

$nombre = $email = "";
$nombreErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar nombre
    if (empty($_POST["nombre"])) {
        $nombreErr = "El nombre es obligatorio.";
    } else {
        $nombre = test_input($_POST["nombre"]);
    }
    
    // Validar correo
    if (empty($_POST["email"])) {
        $emailErr = "El correo es obligatorio.";
    } else {
        $email = test_input($_POST["email"]);
        // Validar formato del correo
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "El correo no es válido.";
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validación de Formulario</title>
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nombre: <input type="text" name="nombre">
        <span><?php echo $nombreErr; ?></span><br><br>
        Correo: <input type="text" name="email">
        <span><?php echo $emailErr; ?></span><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($nombre && $email) {
        echo "<h3>Datos enviados:</h3>";
        echo "Nombre: $nombre<br>";
        echo "Correo: $email";
    }
    ?>
</body>
</html>
