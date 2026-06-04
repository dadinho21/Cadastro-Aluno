<?php
include 'conexao.php';

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$sql = "SELECT * FROM alunos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$aluno = mysqli_fetch_assoc($resultado);

if (!$aluno) {
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $idade = $_POST['idade'];
    $curso = $_POST['curso'];

    $sql = "UPDATE alunos SET nome='$nome', ra='$ra', idade=$idade, curso='$curso' WHERE id=$id";
    mysqli_query($conexao, $sql);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Aluno</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Editar Aluno</h1>
        </header>

        <form method="POST" class="formulario">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?php echo $aluno['nome']; ?>" required>
            </div>

            <div class="form-group">
                <label for="ra">RA:</label>
                <input type="text" id="ra" name="ra" value="<?php echo $aluno['ra']; ?>" required>
            </div>

            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" value="<?php echo $aluno['idade']; ?>" required>
            </div>

            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" id="curso" name="curso" value="<?php echo $aluno['curso']; ?>" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-salvar">Atualizar</button>
                <a href="index.php" class="btn btn-cancelar">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>