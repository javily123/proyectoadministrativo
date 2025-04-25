<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "registro_usuarios"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
$sql = "INSERT INTO usuarios (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Cuenta creada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
