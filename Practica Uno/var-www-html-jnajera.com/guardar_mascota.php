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

// Obtén los datos del formulario
$nombre = $_POST["nombre"];
$raza = $_POST["raza"];
$peso = $_POST["peso"];
$edad = $_POST["edad"];


// Inserta los datos en la base de datos
$sql = "INSERT INTO informacion_mascotas (nombre, raza, peso, edad) VALUES ('$nombre', '$raza', $peso, $edad)";

if ($conn->query($sql) === TRUE) {
    echo "Mascota registrada con éxito";
} else {
    echo "Error al registrar la mascota: " . $conn->error;
}

$conn->close();
?>