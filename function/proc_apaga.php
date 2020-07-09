<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);


if(!empty($id)){
	$selct_arquivo = "SELECT * FROM obra WHERE id='$id'";
	$selct_arquivoes = mysqli_query($conn, $selct_arquivo);
	while($row_arquivo = mysqli_fetch_assoc($selct_arquivoes)){
		if ($id == $row_arquivo['id']){
			function excluirArquivo($arquivo){
					   if( file_exists( $arquivo ) )
					      unlink( $arquivo );
					      return $arquivo;
					} 

			   $dir_nome = $row_arquivo['url_arquivo'];
 			   $dir_capa = $row_arquivo['url_capa'];
			   // chamada da função
			   excluirArquivo($dir_nome);
			   if ($dir_capa != "capas/book.svg"){
			        excluirArquivo($dir_capa);
			   }
			  
		}
	}

	$result_usuario = "DELETE FROM obra WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p class='alert-success' style='color:green;'>Obra apagada com sucesso</p>";
		header("Location: ../admin.php");
	}else{
		
		$_SESSION['msg'] = "<p class='alert-danger' style='color:red;'>Erro a obra não foi apagada com sucesso</p>";
		header("Location: ../admin.php");
	}
}else{	
	$_SESSION['msg'] = "<p class='alert-danger' style='color:red;'>Necessário selecionar uma obra</p>";
	header("Location: ../admin.php");
}
