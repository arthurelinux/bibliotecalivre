<?php
session_start();
include_once("conexao.php");

$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
  $usuario = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
  //echo "$usuario - $senha";
  if((!empty($usuario)) AND (!empty($senha))){
    //Gerar a senha criptografa
   // echo password_hash($senha, PASSWORD_DEFAULT);
    //Pesquisar o usuário no BD
    $result_usuario = "SELECT * FROM usuarios WHERE email='$usuario' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if($resultado_usuario){
      $row_usuario = mysqli_fetch_assoc($resultado_usuario);
      if(password_verify($senha, $row_usuario['senha'])){
        $_SESSION['id'] = $row_usuario['id'];
        $_SESSION['nome'] = $row_usuario['nome'];
        $_SESSION['email'] = $row_usuario['email'];
        
        header("Location: ../admin.php");
      }else{
       // $crip = password_hash($senha, PASSWORD_DEFAULT);
        $_SESSION['msg'] = "Login e senha incorreto! $crip " ;

        header("Location: ../login.php");

      }
    }
  }else{
    $_SESSION['msg'] = "Login e senha incorreto!";
    header("Location: ../login.php");
  }
}else{
  $_SESSION['msg'] = "Página não encontrada";
  header("Location: ../login.php");
}


  