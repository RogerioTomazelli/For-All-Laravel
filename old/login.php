<?php
session_start();
include('conexao.php');

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: tela_login.php');
	exit();
}

$nome_usuario = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuario where nome = '{$nome_usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
var_dump($result);
var_dump($_POST);
var_dump($row);
exit;
if($row == 1) {
    $_SESSION['nome'] = $nome_usuario;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: tela_login.php');
	exit();
}
?>
