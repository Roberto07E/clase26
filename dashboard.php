<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="container w-50 shadow p-4 bg-white rounded text-center">
        <h2>Bienvenido, <?php echo $_SESSION['user']; ?>!</h2>
        <a href="logout.php" class="btn btn-danger mt-3">Cerrar sesión</a>
    </div>
</body>
</html>
