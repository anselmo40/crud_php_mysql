<?php
include 'db.php';
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$conn->query("INSERT INTO funcionarios (nome, cargo, salario) VALUES ('$nome', '$cargo', '$salario')");
header("Location: index.php");
?>
