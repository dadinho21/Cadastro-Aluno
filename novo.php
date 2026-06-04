<?php
include 'conexao.php';

if (!isset($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Aluno</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Cadastrar Novo Aluno</h1>
        </header>

        <form action="salvar.php" method="POST" class="formulario">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="ra">RA:</label>
                <input type="text" id="ra" name="ra" required>
            </div>

            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" required>
            </div>

            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" id="curso" name="curso" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-salvar">Salvar</button>
                <a href="index.php" class="btn btn-cancelar">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>