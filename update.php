<?php
include 'db.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
$conn->query("UPDATE funcionarios SET nome='$nome', cargo='$cargo', salario='$salario' WHERE id=$id");
header("Location: index.php");
?>
