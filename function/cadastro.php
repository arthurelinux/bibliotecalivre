<?php
session_start();
include_once("conexao.php");

$id = 0;
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


$crip =  password_hash($senha, PASSWORD_DEFAULT);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (id, nome, email, senha) VALUES ('$id','$nome', '$email', '$crip')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p class='alert-success' style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location:  ../contribuir.php");
}else{
	$_SESSION['msg'] = "<p class='alert-danger' style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location:  ../contribuir.php");
}
