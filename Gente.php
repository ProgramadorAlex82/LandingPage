<?php
$servername = "localhost";
$database = "Gente";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$name = $_POST['nombre'];
$email = $_POST['correo'];

// Consulta para insertar los datos en la base de datos
$sql = "INSERT INTO Personas (nombre, correo) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo '<p style="text-align: center; font-size: 18px; color: green;">Registro exitoso. Gracias por registrarte!</p>';
    echo '<div style="text-align: center;"><img src="images/gato.jpg" alt="Gato Registrado" style="max-width: 500px; height: auto;"></div>';
} 
else {
    echo "Error al registrar: " . mysqli_error($conn);
}

mysqli_close($conn);
?>