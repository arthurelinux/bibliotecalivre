

      <div class="container-fluid">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3><br><?php  if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }?></div>
                                    <div class="card-body">
                                        <form action="function/login.php" method="POST">
                                            <div class="form-group"><label class="small mb-1" for="inputEmailAddress">E-mail</label><input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="e-mail" name="login" /></div>
                                            <div class="form-group"><label class="small mb-1" for="inputPassword">Senha</label><input class="form-control py-4" id="inputPassword" type="password" placeholder="Senha"  name="senha" /></div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Lembrar senha</label></div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="#">Esqueceu a senha?</a><input type="submit" class="btn btn-primary" name='btnLogin' value="Entrar"></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="contribuir.php">Ainda não é cadastrado? </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>

      
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