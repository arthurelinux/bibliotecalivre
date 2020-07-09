<?php
session_start();
include 'php/head.php';
include 'php/nav.php';
?>
<div class="jumbotron">
	<h3>Cadastre-se</h3>
	<p>Ao se cadastrar você poderá contribuir inserido diversos títulos e obras para outros baixarem.</p>
</div>
<div class="conatiner p-5">
	<form method="POST" action="function/cadastro.php">
			<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}?>

		<div class="form-group">
			<input type="text" class="form-control" name="nome" placeholder="Nome" required>
		</div>
		<div class="form-group">
			<input type="e-mail" class="form-control" name="email" placeholder="e-mail" required>	
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="senha" placeholder="senha" required>
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