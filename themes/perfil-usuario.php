<?php
  include('conexao.php');
  session_start();
  $id=$_SESSION['user'];
  $sql_code = "SELECT * FROM perfil WHERE usuario_id = '$id'";
  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
  $quantidade = $sql_query->num_rows;
  if($quantidade == 1){
	  $perfil = $sql_query->fetch_assoc();
  	  $_SESSION['first_name'] = $perfil['first_name'];
 	  $_SESSION['cpf'] = $perfil['cpf'];
  	  $_SESSION['telefone'] = $perfil['telefone'];
  }
  $sql_code = "SELECT * FROM imagens_perfil WHERE usuario_id = '$id'";
  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
  $quantidade = $sql_query->num_rows;
  if($quantidade == 1){
	  $perfil = $sql_query->fetch_assoc();
	  $_SESSION['path'] = $perfil['path'];
	}
  if(isset($_GET['novoEmail'])) {
    if(strlen($_GET['novoEmail'])==0){
      echo "<script language='javascript' type='text/javascript'>alert('Preencha seu email corretamente');window.location.href='index.php';</script>";
    }else {

      $email = $mysqli->real_escape_string($_GET['novoEmail']);
	  $id = $_SESSION['user'];
      $sql_code = "UPDATE usuarios SET email='$email' WHERE id=$id";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
	  $_SESSION['email']=$email;
      header("Location: perfil-usuario.php");
    }
  }

  if(isset($_GET['novaSenha']) && isset($_GET['senha'])){
    if(strlen($_GET['senha'])==0){
      echo "<script language='javascript' type='text/javascript'>alert('Preencha sua senha corretamente');window.location.href='index.php';</script>";
    }else if(($_GET['novaSenha']) != ($_GET['novaSenha2'])){
	  echo "<script language='javascript' type='text/javascript'>alert('Suas senhas não são iguais');window.location.href='index.php';</script>";
	}else{
	  $id = $_SESSION['user'];
	  $senha=$_GET['senha'];
      $sql_code = "SELECT * FROM usuarios WHERE id = $id AND senha = '$senha'";
	  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
	  $quantidade = $sql_query->num_rows;
      if($quantidade == 1){
	  	  $usuario = $sql_query->fetch_assoc();
		  $_SESSION['user'] = $usuario['id'];
		  $senha = $mysqli->real_escape_string($_GET['novaSenha']);
		  $id = $_SESSION['user'];
	
		  $sql_code = "UPDATE usuarios SET senha='$senha' WHERE id=$id";
		  $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
		  $_SESSION['senha']=$senha;
		  header("Location: index.php");
	  }else{
	  	echo "<script language='javascript' type='text/javascript'>alert('Coloque a senha corretamente.');window.location.href='index.php';</script>";
		sleep(1);
	  }
    }
  }

  if(isset($_GET['primeiroNome']) && isset($_GET['telefone']) && isset($_GET['cpf'])){
	// $id = $_SESSION['user'];
	// $sql_code = "INSERT INTO usuarios (`id`, `email`, `senha`) VALUES (NULL, '{$email}', '{$senha}')";
	$id = $mysqli->real_escape_string($_SESSION['user']);
    $sql_code = "SELECT * FROM perfil WHERE usuario_id = '$id'";
	$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
	$quantidade = $sql_query->num_rows;
    // $usuario = $sql_query->fetch_assoc();$usuario['usuario_id']
	echo "<script language='javascript' type='text/javascript'>alert('$quantidade');window.location.href='index.php';</script>";
    if($quantidade == 1){
		$nome = $_GET['primeiroNome'];
		$telefone = $_GET['telefone'];
		$cpf = $_GET['cpf'];
		$sql_code = "UPDATE perfil SET first_name='$nome',telefone='$telefone',cpf='$cpf' WHERE usuario_id=$id";
		$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
		header("Location: perfil-usuario.php");
		$_SESSION['first_name'] = $nome;
		$_SESSION['cpf'] = $cpf;
		$_SESSION['telefone'] = $telefone;
	}else{
		$nome = $_GET['primeiroNome'];
		$telefone = $_GET['telefone'];
		$cpf = $_GET['cpf'];
        $sql_code = "INSERT INTO perfil (`first_name`, `telefone`, `cpf`,`usuario_id`) VALUES ('{$nome}', '{$telefone}', '{$cpf}','{$id}')";
		$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
		header("Location: perfil-usuario.php");
		$_SESSION['first_name'] = $nome;
		$_SESSION['cpf'] = $cpf;
		$_SESSION['telefone'] = $telefone;
	}
  }
  if(isset($_FILES['foto'])) {
	$foto = $_FILES['foto'];

	$pasta = "arquivos/";
	$nomeDoArquivo = $foto['name'];
	$novoNomeDoArquivo = uniqid();
	$extensao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));

	if($extensao != 'jpg' && $extensao != 'png'){
		die("Tipo do arquivo não aceito.");
	}
	$localFoto = $pasta . $novoNomeDoArquivo . "." . $extensao;
	$deuCerto = move_uploaded_file($foto["tmp_name"], $localFoto);
	$_SESSION['foto'] = $localFoto;
	if($deuCerto){
		$mysqli->query("INSERT INTO imagens_perfil (nome_img, path, usuario_id) VALUES ('$novoNomeDoArquivo', '$localFoto', '$id')") or die($mysqli->error);
		echo "<script language='javascript' type='text/javascript'>alert('Arquivo enviado com sucesso.');window.location.href='index.php';</script>";
	}
	header("Location: perfil-usuario.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Servicin</title>
  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">


	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg navbar-light navigation">
						<a class="navbar-brand" href="pagina-principal.php">
							<img src="images/logoOficial.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="pagina-principal.php">Página inicial</a>
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Anúncios<span><i class="fa fa-angle-down"></i></span>
									</a>
	
									<!-- Dropdown list -->
									<div class="dropdown-menu">
										<a class="dropdown-item" href="anuncios.php">Anúncios</a>
										<a class="dropdown-item" href="meus-anuncios.php">Meus anúncios</a>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-slide">
									<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Páginas <span><i class="fa fa-angle-down"></i></span>
									</a>
									<!-- Dropdown list -->
									<div class="dropdown-menu">
										<a class="dropdown-item" href="sobre-nos.php">Sobre nós</a>
										<a class="dropdown-item" href="contate-nos.php">Contate-nos</a>
										<a class="dropdown-item" href="perfil-usuario.php">Meu Perfil</a>
										<a class="dropdown-item" href="category.html">Categorias</a>
	
									</div>
								</li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
									<a class="nav-link login-button" href="index.php">Login</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-white add-button" style="background-color:#2568B6 ;" href="addServico.php"><i class="fa fa-plus-circle"></i> Adicionar serviço</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>
<!--==================================
=            User Profile            =
===================================-->

<section class="user-profile section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<img src="<?php if(isset($_SESSION['path'])){echo $_SESSION['path'];}else{echo "images/products/usuario_sem_foto.png";}?>" alt="" class="">
						</div>
						<!-- images/products/usuario_sem_foto.png -->
						<!-- User Name -->
						<h5 class="text-center">Usuário</h5>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Editar Perfil</h2>
					<p>Escolha aqui as informações do seu perfil de usuário</p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Editar informações pessoais</h3>
							<form action="">
								<div class="form-group">
									<label for="first-name">Primeiro nome</label>
									<input type="text" class="form-control" value="<?php if(isset($_SESSION['first_name'])){echo $_SESSION['first_name'];}else{echo "";}?>" name="primeiroNome" id="first-name">
								</div>
								<div class="form-group">
									<label >Telefone</label>
									<input type="text" class="form-control" value="<?php if(isset($_SESSION['telefone'])){echo $_SESSION['telefone'];}else{echo "";}?>" name="telefone" id="last-name">
								</div>
								<div class="form-group">
									<label >CPF</label>
									<input type="text" class="form-control" value="<?php if(isset($_SESSION['cpf'])){echo $_SESSION['cpf'];}else{echo "";}?>" name="cpf" id="last-name">
								</div>
								<button type="submit" class="btn btn-transparent">Salvar mudanças</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
						<div class="widget change-password">
							<h3 class="widget-header user">Editar senha</h3>
							<form action="">
								<!-- Current Password -->
								<div class="form-group">
									<label for="current-password">Senha atual</label>
									<input type="password" class="form-control"  name="senha" id="current-password">
								</div>
								<!-- New Password -->
								<div class="form-group">
									<label for="new-password">Nova senha</label>
									<input type="password" class="form-control" name="novaSenha" id="new-password">
								</div>
								<!-- Confirm New Password -->
								<div class="form-group">
									<label for="confirm-password">Confirmar nova senha</label>
									<input type="password" class="form-control" name="novaSenha2" id="confirm-password">
								</div>
								<!-- Submit Button -->
								<button type="submit" class="btn btn-transparent">Trocar senha</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Email Address -->
						<div class="widget change-email mb-0">
							<h3 class="widget-header user">Editar endereço de email</h3>
							<form action="">
								<!-- Current Password -->
								<div class="form-group">
									<label for="current-email">Email atual</label>
									<input type="email" value="<?php echo $_SESSION['email'];?>" class="form-control" name="email" id="current-email">
								</div>
								<!-- New email -->
								<div class="form-group">
									<label for="new-email">Novo email</label>
									<input type="email" class="form-control" name="novoEmail" id="new-email">
								</div>
								<!-- Submit Button -->
								<button type="submit" class="btn btn-transparent">Trocar email</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Adicionar foto</h3>
							<form enctype="multipart/form-data" method="POST" action="">
								<div class="form-group choose-file d-inline-flex">
									<i class="fa fa-user text-center px-3"></i>
									<input type="file" class="form-control-file mt-2 pt-1" name="foto" id="input-file">
								 </div>
								<button type="submit" class="btn btn-transparent">Enviar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm ">
	<div class="container">
	  <div class="row justify-content-center">
		<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0 ">
		  <div class="block about ">
			<img src="images/logoOficial.png" alt="">
			<p class="alt-color" style="text-align: justify;">Somos uma empresa especializada em trabalhar juntamente com você, para que seu trabalho 
			  seja divulgado da maneira correta e para você que procura contratar alguém, saia satisfeito com o serviço 
			dos nossos trabalhadores parceiros.</p>
		  </div>
		</div>
	  </div>
	</div>
  </footer>
  <footer class="footer-bottom">
	<div class="container">
	  <div class="row">
		<div class="col-sm-6 col-12">
		  <div class="copyright">
			<p>Copyright © <script>
				var CurrentYear = new Date().getFullYear()
				document.write(CurrentYear)
			  </script>. All Rights Reserved, theme by <a class="text-primary" href="index.php" target="_blank">servicin.com</a></p>
		  </div>
		</div>
		<div class="col-sm-6 col-12">
		  <ul class="social-media-icons text-right">
			<li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
			<li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
			<li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
			<li><a class="fa fa-vimeo" href=""></a></li>
		  </ul>
		</div>
	  </div>
	</div>
	<div class="top-to">
	  <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
	</div>
  </footer>
  
  <script src="plugins/jQuery/jquery.min.js"></script>
  <script src="plugins/bootstrap/js/popper.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
  
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <script src="plugins/google-map/gmap.js"></script>
  <script src="js/script.js"></script>
  
  </body>
  
  </html>