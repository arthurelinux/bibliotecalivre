<?php
include "function/conexao.php";
include 'php/head.php';
include 'php/nav.php';
$a = $_POST['nome'];
$result_usuarios = "SELECT * FROM obra WHERE id LIKE '$a' ORDER BY id ASC";
     
$sql2 = mysqli_query($conn, "SELECT COUNT(*) WHERE obra ");
    //  $row_usuario_doc = mysqli_fetch_assoc();
     // $row_usuario_doc = mysql_fetch_array($sql2); 


   //   $result_usuarios = "SELECT * FROM usuarios ORDER BY estabelecimento ASC";

    $resultado_usuarios = mysqli_query($conn, $result_usuarios);

 	  	?>

<div class="container">
  

 <?  while($row_usuario_doc = mysqli_fetch_assoc($resultado_usuarios)){
 	  	if ($a == $row_usuario_doc['id']) {
 	  			$x = $row_usuario_doc['resumo'];
 	  			$y = nl2br($x);
 	  			echo "<div class='container border p-5' style='background:white;'>";
          echo "<div class='row'>";
           echo "<div class='col mr-0'>";
          echo "<img src='function/".$row_usuario_doc['url_capa']."' width='200px'>";
          echo "</div>";
          echo "<div class='col'>";
 	  			echo "<h2>".$row_usuario_doc['titulo']."</h2>";
          echo "<h5 class='text-right'>".$row_usuario_doc['autores']."</h5>";
           echo "<p class='text-right'>".$row_usuario_doc['ano']."</p>";
 	  			echo "<p>".$y."</p>";
             echo "<a class='btn btn-primary' href='function/".$row_usuario_doc['url_arquivo']."'>Baixar</a>";
 	  			echo "</div>";
           echo "</div>";
 	  	}
 	  	}?>
      </div>
      
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>