<?php
session_start();
include_once "conexao.php";

$id = 0;
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
//$descricao = $_POST['link']);
$autor =  $_POST['autor'];
$resumo = $_POST['resumo'];
$ano = $_POST['ano'];
$id_u = $_SESSION['id'];


$arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
$nome1 = $_FILES[ 'arquivo' ][ 'name' ];
 
    // Pega a extensão
$extensao = pathinfo ( $nome1, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
$extensao = strtolower ( $extensao );
 
$novoNome = uniqid ( time () ) . '.' . $extensao;
$destino = 'livros/ ' . $novoNome;

echo '<pre>';
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $destino)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}



$arquivo_tmpN = $_FILES[ 'capa' ][ 'tmp_name' ];
if (empty($arquivo_tmpN)){
	$destinoN = 'capas/book.svg';
} else {

$nome = $_FILES[ 'capa' ][ 'name' ];
 
    // Pega a extensão
$ext = pathinfo ( $nome, PATHINFO_EXTENSION );
 
    // Converte a extensão para minúsculo
$ext = strtolower ( $ext );
 
$novoCampa = uniqid ( time () ) . '.' . $ext;
$destinoN = 'capas/ ' . $novoCampa;

echo '<pre>';
if (move_uploaded_file($_FILES['capa']['tmp_name'], $destinoN)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);


echo "</pre>";

}


$query = mysqli_query($conn, "INSERT INTO obra (id, titulo, resumo, ano, url_capa, url_arquivo,	autores, categoria, id_u) VALUES ('$id', '$titulo', '$resumo' ,'$ano', '$destinoN', '$destino', '$autor', '$categoria', '$id_u' )");

echo "<script type=\'text/javascript\'>	alert(\'Imagem cadastrado com Sucesso.\');</script>";
		

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p class='alert-success' style='color:green;'>Obra cadastrada com sucesso</p>";
    header("Location:  ../admin.php");
}else{
    $_SESSION['msg'] = "<p class='alert-danger' style='color:red;'>Obra não foi cadastrada</p>";
    header("Location:  ../admin.php");
}
							
			



		?>