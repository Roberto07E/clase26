<?php
session_start();
$conn = new mysqli("localhost", "root", "", "usuarios_db");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $edad = (int) $_POST['edad'];
    $genero = $conn->real_escape_string($_POST['genero']);

    $sql = "INSERT INTO usuarios (nombre, email, password, edad, genero) VALUES ('$nombre', '$email', '$password', $edad, '$genero')";

    if ($conn->query($sql) === TRUE) {
        // Si el registro fue exitoso, redirige al login
        header("Location: login.html"); // Redirige al archivo login.html
        exit(); // Detiene la ejecución del script después de la redirección
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

