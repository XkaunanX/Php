<?php
// Subida y manipulación de archivos desde formularios

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["archivo"])) {
    $nombreArchivo = $_FILES["archivo"]["name"];
    $tipoArchivo = $_FILES["archivo"]["type"];
    $tmpArchivo = $_FILES["archivo"]["tmp_name"];
    $tamañoArchivo = $_FILES["archivo"]["size"];

    // Validar tamaño del archivo
    if ($tamañoArchivo > 500000) {
        echo "El archivo es demasiado grande.";
    } else {
        // Subir archivo a una carpeta en el servidor
        $directorioDestino = "uploads/" . basename($nombreArchivo);
        if (move_uploaded_file($tmpArchivo, $directorioDestino)) {
            echo "El archivo ha sido subido exitosamente.";
        } else {
            echo "Hubo un error al subir el archivo.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
</head>
<body>
    <h2>Formulario de Subida de Archivos</h2>
    <form method="POST" enctype="multipart/form-data">
        Selecciona un archivo: <input type="file" name="archivo" required><br><br>
        <input type="submit" value="Subir Archivo">
    </form>
</body>
</html>
