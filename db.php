<?php
$conn = new mysqli("localhost", "root", "", "empresa");
if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
}
?>
