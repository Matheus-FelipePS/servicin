<?php

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
						<a class="dropdown-item" href="anuncios.php">Categorias</a>
					  </div>
					</li>
					<!--<li class="nav-item dropdown dropdown-slide">
					  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Modo de exibição <span><i class="fa fa-angle-down"></i></span>
					  </a>-->
					  <!-- Dropdown list -->
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="anuncios.php"></a>
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
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					<form>
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="O que você procura?">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputCategory4" placeholder="Categoria">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Localização">
							</div>
							<div class="form-group col-md-2">
								
								<button type="submit" class="btn btn-primary">Pesquisar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2></h2>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h4 class="widget-header">Todas as categorias</h4>
	<ul class="category-list">
		<li><a href="anuncios.php">Pedreiros <span>93</span></a></li>
		<li><a href="anuncios.php">Marceneiros <span>233</span></a></li>
		<li><a href="anuncios.php">Pintor  <span>183</span></a></li>
		<li><a href="anuncios.php">Diarista <span>343</span></a></li>
	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">Perto</h4>
	<ul class="category-list">
		<li><a href="anuncios.php">Belo Horizonte <span>93</span></a></li>
		<li><a href="anuncios.php">Lourdes <span>233</span></a></li>
		<li><a href="anuncios.php">Buritis <span>183</span></a></li>
		<li><a href="anuncios.php">Savassi <span>120</span></a></li>
		<li><a href="anuncios.php">Floresta <span>40</span></a></li>
		<li><a href="anuncios.php">Pampulha <span>81</span></a></li>
	</ul>
</div>

<div class="widget filter">
	<h4 class="widget-header">Mostrar Produtos</h4>
	<select>
		<option value="1">Top Avaliações</option>
		<option value="2">Maior Preço</option>
		<option value="4">Menor Preço</option>
	</select>
</div>

<div class="widget price-range w-100">
	<h4 class="widget-header">FAIXA DE VALOR</h4>
	<div class="block">
						<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
						data-slider-value="[0,5000]">
				<div class="d-flex justify-content-between mt-2">
						<span class="value">100 - 1000</span>
				</div>
	</div>
</div>

			</div>
			</div>
			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>FILTRO</strong>
							<select>
								<option>Mais Recentes</option>
								<option value="1">Mais Populares</option>
								<option value="2">Menor Preço</option>
								<option value="4">Maior Preço</option>
							</select>
						</div>
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="#" onclick="event.preventDefault();" class="text-info"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="ad-list-view.html"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
<div class="product-grid-list">
	<div class="row mt-30">
		<div class="col-sm-12 col-lg-4 col-md-6">
			<?php
  				include('conexao.php');
				$sql_code = "SELECT a1.*, c1.categoria_nome, u1.email FROM `anuncio` a1 LEFT JOIN categorias c1 on (a1.categoria_id = c1.categoria_id) LEFT JOIN usuarios U1 ON (A1.usuario_id = U1.id)";
				$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

				while($arquivo = $sql_query->fetch_assoc()){
			?>
			<div class="product-item bg-light">
				<div class="card">
					<div class="thumb-content">
						<a href="">
							<img class="card-img-top img-fluid" src="<?php echo $arquivo['imagem_path'];?>" alt="Imagem">
						</a>
					</div>
					<div class="card-body">
						<h4 class="card-title"><a href="single.html"><?php echo $arquivo['titulo'];?></a></h4>
						<ul class="list-inline product-meta">
							<li class="list-inline-item">
								<a href="single.html"><i class="fa fa-folder-open-o"></i><?php echo $arquivo['categoria_nome'];?></a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-calendar"></i><?php echo $hoje = date('d/m/Y');?></a>
							</li>
						</ul>
						<p class="card-text"><?php echo $arquivo['descricao'];?></p>
						<div class="product-ratings">
							<ul class="list-inline">
								<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
								<li class="list-inline-item"><i class="fa fa-star"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php
			}
			?>
		</div>
						
						
						<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->


						</div>
					</div>
				</div>
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Anterior</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Próximo</span>
								</a>
							</li>
						</ul>
					</nav>
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