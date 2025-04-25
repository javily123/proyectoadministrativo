<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_usuarios";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        echo "Inicio de sesión exitoso. ¡Bienvenido, " . $row['name'] . "!";
      
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$conn->close();
?>
