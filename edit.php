<?php
include 'db.php';
$id = $_GET['id'];
$row = $conn->query("SELECT * FROM funcionarios WHERE id=$id")->fetch_assoc();
?>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    Nome: <input type="text" name="nome" value="<?= $row['nome'] ?>"><br>
    Cargo: <input type="text" name="cargo" value="<?= $row['cargo'] ?>"><br>
    Salário: <input type="number" name="salario" value="<?= $row['salario'] ?>"><br>
    <button>Atualizar</button>
</form>
