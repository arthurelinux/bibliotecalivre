<?php
session_start();
include 'php/head.php';
include 'php/nav.php';
?>

<div class="jumbotron text-center">
	<img src="imagem/logob.png" width="200px">
	<h3>Biblioteca Livre</h3>
	<p>Compartilhando conhecimento sempre!.</p>
	
</div>
<div class="conatiner p-5">
	<h4>Objetivo</h4>
	<p>Essa plataforma tem por objetivo distribuir obras e materiais autorais de forma livre e sem custos, com o intuito de ajudar outros apreder novas ideiais e novas habilidades.</p>
	<h4>Desenvolvimento</h4>
	<p>Essa é uma platafora desenvolvida por Arthur Carlos, autor e idealizador do Blog Educadores no Linux, e como os mesmos principios do blog.</p>

	<h4>Sua responsabilidade</h4>
	<p>É de suma importância que você compreenda que as obras compartilhadas aqui não deven ser de nenhuma forma exposta a processos autorais. Devem ser obras Livres e de preferencia de dominio publico ou de sua autoria.</p>
	<p>Quando de sua autoria, você concede que outros baixem seus escritos.</p>

	<h4>Como posso ajudar?</h4>
	<p>Você pode nos ajudar seguindo nossas redes sociais e compartilhando seus textos aqui. </p><p>Uma outra forma é por se tornar um padrinho do blog Educadores no Linux e fazendo doações mensais em qualquer valor.</p>
	<br>
	   <h4 class="text-center">Iniciativas</h4>
          <a href='https://educadoresnolinux.top' target="_blank">
          <img  src="imagem/logo.png" class="p-2"  width="150px"></a>
         <a href='https://acessohost.site' target="_blank" > <img src="imagem/acesso.png" class="p-2" width="150px"></a>
         <a href="https://www.biglinux.com.br" target="_blank"> <img src="imagem/g6534.png" class="p-2" width="100px"></a>
         <a href="https://pulga.store/" target="_blank"> <img src="imagem/pulga.png" class="p-2" width="150px"></a><br><br>
	
	
	
	<a href="https://www.colabora.ai/educadoresnolinux" target="_blank">Seja um padrinho</a>
	<br>
	<a href="https://youtube.com/educadoresnolinux" target="_blank">Youtube</a>
	<a href="https://facebook.com/educadoresnolinux" target="_blank">Facebook</a>
	<a href="https://instagram.com/educadoresnolinux" target="_blank">Instagram</a>
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