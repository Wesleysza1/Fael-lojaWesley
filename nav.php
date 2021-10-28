<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Wesley Games<i</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="busca.php?busca=_">Produtos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="busca.php?busca=jogos">Jogos</a></li>
            <li><a href="busca.php?busca=xbox">Xbox</a></li>
            <li><a href="busca.php?busca=playstation">Playstation</a></li>
			<li><a href="busca.php?busca=console">Consoles</a></li>
			<li><a href="busca.php?busca=acessorio">Acessórios</a></li>
          </ul>
        </li>
      </ul>
      <form method="get" action="busca.php" class="navbar-form navbar-left" role="search">
        <div class="form-group">
          	<input type="text" class="form-control" name="busca" placeholder="Busque aqui">
        </div>
		  
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contato</a></li>
		<li><a href="carrinho.php?id="><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li>
		  
		  <?php
		  	if(empty($_SESSION['id_user'])){
		  ?>
		  
		  <li><a href="formLogon.php"><span class="glyphicon glyphicon-log-in"></span> Logon</a></li>
		  <li><a href="formUsuario.php"><span class="glyphicon glyphicon-pencil"></span> Cadastrar</a></li>
		  
		  <?php
			} else {
				
				if($_SESSION['adm']==0){
				
				$consulta_user=$conexao->query("SELECT nome_user FROM usuarios WHERE id_user='$_SESSION[id_user]'");
				$exibe_user=$consulta_user->fetch(PDO::FETCH_ASSOC);
		  ?>
		  
		  <li>
			  <a href="areaUser.php">
				  <span class="glyphicon glyphicon-user"></span> <?php echo $exibe_user['nome_user']; ?>
			  </a>
		  </li>
		  
		  <li>
			  <a href="sair.php">
				  <span class="glyphicon glyphicon-off"></span> Sair
			  </a>
		  </li>
		  
		  <?php } else { ?>
		  
				  <li>
					  <a href="adm.php">
						  <button class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-alert"></span>Admin User</button>
					  </a>
				  </li>

				  <li>
					  <a href="sair.php">
						  <span class="glyphicon glyphicon-off"></span> Sair
					  </a>
				  </li>
		  
		  <?php }
			}
		  ?>
		  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
