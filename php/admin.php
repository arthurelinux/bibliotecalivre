<div class="jumbotron">
	<h3>Contribua</h3>
	<p>Envie obras para download e ajude outras pessoas.</p>
	<a class='btn btn-outline-danger' href="function/logout.php">Sair</a>
	<a class='btn btn-outline-primary' href="lista_enviados.php">Obras enviadas</a>
	  <a class='btn btn-outline-dark' href="admin.php">Painel de cadastro</a>
</div>
<div class="conatiner p-5">
	<form method="POST" action="function/cadastro_obra.php" enctype="multipart/form-data" >
			<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}?>

		<div class="form-group">
			<input type="text" class="form-control" name="titulo" placeholder="Titulo" required>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="autor" placeholder="Autor" required>	
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="ano" placeholder="ano" required>
		</div>
		<div class="form-group">
			<select name="categoria" class="form-control" required>
				<option> --- Selecione --</option>
				<option value="Linux"> Linux</option>
				<option value="Educacao"> Educação</option>
				<option value="Literatura"> Literatura</option>
				<option value="Programacao"> Programação</option>
				<option value="Informatica"> Informrática</option>
				<option value="Geral"> Geral</option>
			</select>
		</div>
		<div class="form-group">
			<script type="text/javascript">
				var uno = function(){
					document.getElementById('resumo').innerHTML = document.getElementById('resumo').innerHTML.trim();
				}
				
			</script>
			<textarea class="form-control" id='resumo' name="resumo" placeholder="resumo" required>
		
			</textarea>
			<script type="text/javascript"> uno()</script>
		</div>
		<div class="form-group" >
			<span>Livro em PDF</span>
			<input type="file" name="arquivo"  required>
		</div>
		<div class="form-group">
			<span>Capa do Livro</span>
			<input type="file" name="capa"  >
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-primary" name="enviar" value="cadastrar">
		</div>
		
	</form>
	
</div>
</div>
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