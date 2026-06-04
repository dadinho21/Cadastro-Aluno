<?php
include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM alunos WHERE id=$id";
mysqli_query($conexao, $sql);

header("Location: index.php");
?>