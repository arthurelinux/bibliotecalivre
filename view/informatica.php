
      <div class="container-fluid">
        <h1 class="mt-4">Estante informática</h1>
        <div class="container">
<?php

include 'function/conexao.php';


?>
 

    
      <h3>Lista</h3>
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
   
      $tipo ="Informatica";
    
      $result_usuarios = "SELECT * FROM obra WHERE categoria LIKE '$tipo' ORDER BY id DESC";
     
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
           echo "<a class='btn btn-primary' href='function/".$row_usuario_doc['url_arquivo']."'>Baixar</a>";
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
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-2716708143774454"
     data-ad-slot="3449212383"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
          </div>
    </div>    
     <!--   </div>
      </div>
    </div>-->




      
      
      </div>
     


  

    </div>
    <!-- /#page-content-wrapper -->


      
      
      </div>
     


  

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