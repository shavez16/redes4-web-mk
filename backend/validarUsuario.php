<?php
session_start();
include 'conexion.php'; // Incluye la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = trim($_POST['user']);
    $password = trim($_POST['password']);

    if (empty($user) || empty($password)) {
        echo "<script>alert('Todos los campos son obligatorios'); window.location.href='../login.html';</script>";
        exit();
    }

    // Consulta para obtener la contraseña y el usuario de la base de datos
    $stmt = $conexion->prepare("SELECT usuario, contracena FROM usuario WHERE usuario = ?");
    
    if (!$stmt) {
        echo "Error en la consulta: " . $conexion->error;
        exit();
    }

    $stmt->bind_param("s", $user);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Obtener los valores de la base de datos
        $stmt->bind_result($db_user, $db_password);
        $stmt->fetch();

        // Verificar los valores obtenidos
        echo "Usuario en base de datos: " . $db_user . "<br>";
        echo "Contraseña en base de datos: " . $db_password . "<br>";

        // Comparar los datos
        if ($user === $db_user && $password === $db_password) {
            $_SESSION['usuario'] = $user;
            header("Location: ../dashboard.php");  // Redirigir al dashboard
            exit();
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='../login.html';</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado'); window.location.href='../login.html';</script>";
    }

    $stmt->close();
    $conexion->close();
} else {
    header("Location: ../login.html");
    exit();
}
?>
