<?php
include_once "function/conexao.php";
include 'php/head.php';
include 'php/nav.php';
?>

		    <div class="container-fluid">
        <h1 class="mt-4">Busca</h1>
        <div class="container">
		<h4>Resultado</h4>
		
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
		
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		
			$nome = $_POST['nome'];
			$result_usuario = "SELECT * FROM obra WHERE titulo LIKE '%$nome%'";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				 echo "<tr>";
     echo "<td>";   
       echo " ".$row_usuario['titulo']."</td>";
         echo "<td>";

      echo " " . $row_usuario['autores'] . "</td> ";
       

      echo "<td> " . $row_usuario['ano'] . "</td> ";
        echo "<td>";
        echo "<form method='POST' action='ver.php'  enctype='multipart/form-data'";
        echo "<input type='text' name='id' value='".$row_usuario['id']."'>";
        echo "<button type='submit' name='nome' class='btn btn-success' value='".$row_usuario['id']."'>Ver detalhes</button>";
        echo '</form>';
         echo "</td>";
          echo "<td>";
           echo "<a class='btn btn-primary' href='function/".$row_usuario['url_arquivo']."'>Baixar</a>";
          echo "</td>";
				
			}
		
		?>
	</table>
  </div></div>

    </div>
    <!-- /#page-content-wrapper -->

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