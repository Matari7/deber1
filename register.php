<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia localhost si es necesario
$username = "root";
$password = "root";
$dbname = "db";

// Conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener los datos del formulario
    $uname = $_GET['uname'];
    $pword = $_GET['pword'];
    $mail = $_GET['mail'];
    
    // Preparar la consulta SQL para insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO usuarios (usuario, clave, email) VALUES ('$uname', '$pword', '$mail')";
    
    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
