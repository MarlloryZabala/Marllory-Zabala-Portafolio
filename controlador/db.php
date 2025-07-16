<?php
// Archivo: db.php
// Descripción: Este archivo se encarga de establecer la conexión con la base de datos MySQL.

// Configuración de la conex$ón
$host = 'localhost';            // Dirección del servidor de base de datos (en este caso, localhost).
$user = 'root';                 // Usuario de la base de datos (por defecto, root).
$password = '';                 // Contraseña del usuario (vacía si no la has configurado).
$database = 'hotel_reservas';   // Nombre de la base de datos donde se almacenan las reservaciones.

// Crear la conexión con la base de datos
$conn = mysqli_connect($host, $user, $password, $database);

/* Verificar si la conexión fue exitosa */
if (!$conn) {
    // Si la conexión falla, se muestra un mensaje de error.
    die("Error de conexión: " . mysqli_conn);
// Si la conexión es exitosa, el script continuará ejecutándose sin mostrar mensajes.
// Este archivo se incluirá en otros scripts como `index.php`, `create.php`, `update.php`, y `delete.php`.
}
?>