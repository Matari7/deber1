<?php
// Datos de conexión a la base de datos
$servername = "mysql-matari.alwaysdata.net"; // Cambia localhost si es necesario
$username = "matari_test";
$password = "UniversidadCentral123*";
$dbname = "matari_distribuida";

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

    // Validar los datos (por ejemplo, asegurarse de que los campos no estén vacíos y el formato del correo sea válido)
if (empty($username) || empty($password) || empty($email)) {
    die("Por favor, complete todos los campos.");
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("El formato del correo electrónico no es válido.");
}
    
    // Preparar la consulta SQL para insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO users (username, clave, email) VALUES ('$uname', '$pword', '$mail')";
    
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