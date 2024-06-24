<?php
$conn = new mysqli("localhost", "root", "", "nearbuybonitoo");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>