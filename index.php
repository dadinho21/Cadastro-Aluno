<?php
include 'conexao.php';

// Verificar login
if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}

$sql = "SELECT * FROM alunos ORDER BY id DESC";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="css/stryle.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Lista de Alunos</h1>
            <a href="logout.php" class="btn-logout">Sair</a>
        </header>

        <div class="actions">
            <a href="novo.php" class="btn btn-novo">+ Novo Aluno</a>
        </div>

        <table class="tabela">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>RA</th>
                    <th>Idade</th>
                    <th>Curso</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($aluno = mysqli_fetch_assoc($resultado)): ?>
                <tr>
                    <td><?php echo $aluno['id']; ?></td>
                    <td><?php echo $aluno['nome']; ?></td>
                    <td><?php echo $aluno['ra']; ?></td>
                    <td><?php echo $aluno['idade']; ?></td>
                    <td><?php echo $aluno['curso']; ?></td>
                    <td class="acoes">
                        <a href="editar.php?id=<?php echo $aluno['id']; ?>" class="btn btn-editar">Editar</a>
                        <a href="excluir.php?id=<?php echo $aluno['id']; ?>" class="btn btn-excluir" onclick="return confirm('Tem certeza?')">Excluir</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>