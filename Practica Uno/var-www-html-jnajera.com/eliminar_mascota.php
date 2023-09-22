<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "192.168.68.119";
$username = "javiernajera";
$password = "javiernajera";
$dbname = "mascotas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtiene el ID del registro a eliminar
$id = $_POST["id"];

// Ejecuta la consulta para eliminar el registro
$sql = "DELETE FROM informacion_mascotas WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Mascota eliminada con éxito";
} else {
    echo "Error al eliminar la mascota: " . $conn->error;
}

$conn->close();
?>