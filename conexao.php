<?php
session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro_aluno";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
?>