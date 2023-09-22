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

// Obtén el nombre de la mascota a buscar
$nombre_busqueda = $_POST["nombre_busqueda"];

// Realiza la consulta
$sql = "SELECT * FROM informacion_mascotas WHERE nombre LIKE '%$nombre_busqueda%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><strong>Nombre:</strong> " . $row["nombre"] . "</td>";
    echo "<td><strong>Raza:</strong> " . $row["raza"] . "</td>";
    echo "<td><strong>Peso:</strong> " . $row["peso"] . " kg</td>";
    echo "<td><strong>Edad:</strong> " . $row["edad"] . " años</td>";
    echo "<td>";
    echo "<form action='eliminar_mascota.php' method='post'>";
    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
    echo "<input type='submit' value='Eliminar'>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
}

$conn->close();
?>