<?php
// Archivo: create.php
// Descripción: Procesa el formulario de ingreso y almacena los datos en la base de datos.

// Incluir el archivo de conexión
require_once(dirname(__FILE__)."/../db.php");

// Verificar si el formulario fue enviado mediante POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario y sanitizarlos
    $nombre = strval($_POST['nombre']);       // limpia el nombre
    $email = strval($_POST['email']);   // limpia el apellido
    $mensaje = strval( $_POST['mensaje']);   // limpia el teléfono
    

    // Preparar la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO contactenos (nombre, correo, mensaje) VALUES ('$nombre', '$email', '$mensaje')";
    


    // Ejecutar la consulta y verificar si fue exitosa
    if (mysqli_query($conn, $sql)) {
        // Si la consulta fue exitosa, redirigir al index con un mensaje de éxito
        header('Location: /Portafolio/index.php?mensaje=Mensaje registrado exitosamente');
    } else {
        // Si hubo un error, mostrar el mensaje
        echo "Error al registrar: ".mysqli_error($conn);
    }
}
?>