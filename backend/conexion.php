
<?php
$servername= "srv1710.hstgr.io"; // Cambia esto si tu servidor es diferente
$username = "u358307418_ezequielchavez";       // Tu usuario de la base de datos
$password = "Ezequiel2002^..^^..^";           // La contraseña de tu base de datos
$dbname  = "u358307418_RedesProyecto";   // El nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    echo "Conexión exitosa a la base de datos";
}
?>