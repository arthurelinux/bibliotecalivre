<?php
session_start();
include 'function/conexao.php';
include 'function/verificar.php';
include 'php/head.php';
include 'php/nav.php';
?>
<div class="jumbotron">
	<h3>Contribua</h3>
	<p>Envie obras para download e ajude outras pessoas.</p>
	<a class='btn btn-outline-danger' href="function/logout.php">Sair</a>
	<a class='btn btn-outline-primary' href="function/logout.php">Obras enviadas</a>
  <a class='btn btn-outline-dark' href="admin.php">Painel de cadastro</a>
  <p>Em caso de erros no cadastro ou no arquivo enviado, recomendamos a exclusão da obra e o re-envio da mesma. </p>
</div>
<div class="conatiner p-5">

			<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}?>


 

    
      <h3>Lista de arquivos</h3>
      <div class="row">
         <table  class="table table-striped table-sm">
         <thead>
    <tr>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Ano</th>
     <th scope="col">Detalhes</th>
      <th scope="col">Baixar</th>
    </tr>
  </thead>
     <!--   <div class="card-consultar-chamado">
          <div class="card" >
            <div class="card-header">
              Consultar seus Documentos disponíveis
            </div>-->
    <!--<a href="index.php">Listar</a><br> -->
   <!-- <h1>Lista de Documentos</h1><br>-->
    <?php
    if(isset($_SESSION['msg'])){
      echo "<p class='alert-danger'>". $_SESSION['msg']. "</p>";
      unset($_SESSION['msg']);
    }
    
    //Receber o número da página
    $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);   
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
    
    //Setar a quantidade de itens por pagina
    $qnt_result_pg = 26;
    
    //calcular o inicio visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
    

 //id  nome  estabelecimento email nome_imagem setor cidade  contato_a contato_b whats sit

   //   $result_usuarios =" SELECT * FROM usuarios ORDER BY '$setor' DESC";  ORDER BY id DESC
    // $result_usuarios =" SELECT * FROM usuarios ORDER BY '$cidade' DESC";   
   
      $tipo = $_SESSION['id'];
    
      $result_usuarios = "SELECT * FROM obra WHERE id_u LIKE '$tipo' ORDER BY id DESC";
     
      $sql2 = mysqli_query($conn, "SELECT COUNT(*) WHERE obra ");
    //  $row_usuario_doc = mysqli_fetch_assoc();
     // $row_usuario_doc = mysql_fetch_array($sql2); 


   //   $result_usuarios = "SELECT * FROM usuarios ORDER BY estabelecimento ASC";

    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

  
  
    while($row_usuario_doc = mysqli_fetch_assoc($resultado_usuarios)){
 

      echo "<tr>";
     echo "<td>";   
       echo " ".$row_usuario_doc['titulo']."</td>";
         echo "<td>";

      echo " " . $row_usuario_doc['autores'] . "</td> ";
       

      echo "<td> " . $row_usuario_doc['ano'] . "</td> ";
        echo "<td>";
        echo "<form method='POST' action='ver.php'  enctype='multipart/form-data'";
        echo "<input type='text' name='id' value='".$row_usuario_doc['id']."'>";
        echo "<button type='submit' name='nome' class='btn btn-success' value='".$row_usuario_doc['id']."'>Ver detalhes</button>";
        echo '</form>';
         echo "</td>";
          echo "<td>";
          	echo "<a href='function/proc_apaga.php?id=" .$row_usuario_doc['id'] . "'>Apagar</a>";
          echo "</td>";
     
    
       
      /*echo "<a href='functions/edit_usuario.php?id=" . $row_usuario['id'] . "'>Editar</a><br>";*/
    
           echo "</tr>";
    
    }
    echo "</table>";
    echo "</div></div>";
    
    echo "";
    //Paginção - Somar a quantidade de usuários

    $result_pg = "SELECT COUNT(categoria) AS num_result FROM obra";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    //echo $row_pg['num_result'];
    //Quantidade de pagina 
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
    
    //Limitar os link antes depois
    $max_links = 2;

    echo "<a href='index.php?pagina=1'>Primeira</a> ";
    
    for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
      if($pag_ant >= 1){
        echo "<a href='index.php?pagina=$pag_ant'>$pag_ant</a> ";
      }
    }
     
    echo "$pagina ";
    
    for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
      if($pag_dep <= $quantidade_pg){
        echo "<a href='index.php?pagina=$pag_dep'>$pag_dep</a> ";
      }
    }
    
    echo "<a href='index.php?pagina=$quantidade_pg'>Ultima</a>";
    
    ?>    

    <!--  <p><span>Olá </span><? echo $_SESSION['nome']; ?></p>
      <p style="font-size: 30px;">Banco de horas: <? echo $_SESSION['ponto']; ?>h</p>
      
      <p> </p>    --> 
          </div>
    </div>    