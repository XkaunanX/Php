<?php
// Conectar a la base de datos utilizando PDO
$pdo = new PDO('mysql:host=localhost;dbname=mi_base_de_datos', 'usuario', 'contraseña');

// Supongamos que recibimos un valor desde un formulario
$usuario = 'juan@example.com';

// Usar una consulta preparada para prevenir inyección SQL
$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
$stmt->bindParam(':email', $usuario, PDO::PARAM_STR);
$stmt->execute();

// Obtener los resultados de la consulta
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Mostrar los resultados
foreach ($resultados as $fila) {
    echo 'Nombre: ' . $fila['nombre'] . '<br>';
}
?>
