<?php include 'db.php'; ?>
<a href="create.php">Novo Funcionário</a>
<table border="1">
<tr><th>ID</th><th>Nome</th><th>Cargo</th><th>Salário</th><th>Ações</th></tr>
<?php
$res = $conn->query("SELECT * FROM funcionarios");
while($row = $res->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['cargo']}</td><td>{$row['salario']}</td>
        <td><a href='edit.php?id={$row['id']}'>Editar</a> | <a href='delete.php?id={$row['id']}'>Excluir</a></td>
    </tr>";
}
?>
</table>
