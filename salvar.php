<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $idade = $_POST['idade'];
    $curso = $_POST['curso'];

    $sql = "INSERT INTO alunos (nome, ra, idade, curso) VALUES ('$nome', '$ra', $idade, '$curso')";
    mysqli_query($conexao, $sql);
}

header("Location: index.php");
?>