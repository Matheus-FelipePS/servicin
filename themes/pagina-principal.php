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
								<a class="nav-link" href="pagina-principal.php">Início</a>
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
						</ul>
						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="index.php">Logout</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" style="background-color:#2568B6 ;" href="addServico.php"><i class="fa fa-plus-circle"></i> Adicionar Serviço</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Compre e venda perto de você </h1>
					<p>Junte-se aos milhões que compram e vendem uns aos outros <br> todos os dias em comunidades locais ao redor do mundo</p>
					<div class="short-popular-category-list text-center">
						<h2>Categorias Populares</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="anuncios.php"><i class="fa fa-bed"></i> Diarista</a></li>
							<li class="list-inline-item">
								<a href="anuncios.php"><i class="fa fa-grav"></i> Personal</a>
							</li>
							<li class="list-inline-item">
								<a href="anuncios.php"><i class="fa fa-car"></i> Mecânico</a>
							</li>
						</ul>
					</div>
					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
										<form>
											<div class="form-row">
												<div class="form-group col-md-4">
													<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" placeholder="O que está procurando">
												</div>
												<div class="form-group col-md-3">
													<select class="w-100 form-control mt-lg-1 mt-md-2">
														<option>Categoria</option>
														<option value="1">Melhor avaliado</option>
														<option value="2">Menor preço</option>
														<option value="4">Maior preço</option>
													</select>
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Localização">
												</div>
												<div class="form-group col-md-2 align-self-center">
													<button type="submit" class="btn btn-primary">Pesquisar</button>
												</div>
											</div>
										</form>
									</div>
								</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Em alta</h2>
					<p>Os anúncios que tem feito mais sucesso nos últimos dias</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/pedreiro.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html">Serviço de Pedreiro</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Casa</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>26 de Dezembro</a>
		    	</li>
		    </ul>
		    <p class="card-text">Profissinal com 3 anos de experiência em construções de pequeno e grande porte.</p>
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



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/jardineiro.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html">Jardineiro</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Casa</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>21 de Dezembro</a>
		    	</li>
		    </ul>
		    <p class="card-text">Meu nome é Marcio e tenho interesse em trabalhar como jardineiro em uma casa ou empresa.</p>
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



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/diarista.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html">Diarista</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Casa</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>29 de Dezembro</a>
		    	</li>
		    </ul>
		    <p class="card-text">Disponibilidade de segunda a sexta todos os horários.</p>
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



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="single.html">
				<img class="card-img-top img-fluid" src="images/products/babá" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html">Babá</h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Casa</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>21 de Dezembro</a>
		    	</li>
		    </ul>
		    <p class="card-text">Ex professora, bastante experiência com crianças.</p>
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



					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Todas categorias</h2>
					<p>Principais serviços prestados no Serviçin</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-briefcase icon-bg-5"></i> 
								<h4>Empregos</h4>
							</div>
							<ul class="category-list" >
								<li><a href="anuncios.php">Pedreiro <span>93</span></a></li>
								<li><a href="anuncios.php">Jardineiro <span>233</span></a></li>
								<li><a href="anuncios.php">Babá  <span>183</span></a></li>
								<li><a href="anuncios.php">Professor particular <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-car icon-bg-6"></i> 
								<h4>Mecânico</h4>
							</div>
							<ul class="category-list" >
								<li><a href="anuncios.php">Carro <span>193</span></a></li>
								<li><a href="anuncios.php">Moto<span>23</span></a></li>
								<li><a href="anuncios.php">Bicicleta <span>33</span></a></li>
								<li><a href="anuncios.php">Caminhão <span>73</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-paw icon-bg-7"></i> 
								<h4>Veterinário</h4>
							</div>
							<ul class="category-list" >
								<li><a href="anuncios.php">Gato <span>65</span></a></li>
								<li><a href="anuncios.php">Cachorro <span>23</span></a></li>
								<li><a href="anuncios.php">Pássaros  <span>113</span></a></li>
								<li><a href="anuncios.php">Coelho<span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							
							<div class="header">
								<i class="fa fa-laptop icon-bg-8"></i> 
								<h4>Serviços</h4>
							</div>
							<ul class="category-list" >
								<li><a href="anuncios.php">Manutenção eletrônicos <span>93</span></a></li>
								<li><a href="anuncios.php">Lavar carro <span>233</span></a></li>
								<li><a href="anuncios.php">Comprar roupas usadas  <span>183</span></a></li>
								<li><a href="anuncios.php">Motoboy<span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--====================================
=            Call to Action            =
=====================================-->

<section class="call-to-action overly bg-3 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					<h2>Comece hoje para obter mais exposição e expandir seus negócios</h2>
					<ul class="list-inline mt-30">
						<li class="list-inline-item"><a class="btn btn-main" href="single.html">Adicionar serviço</a></li>
						<li class="list-inline-item"><a class="btn btn-secondary" href="anuncios.php">Lista de anúncios</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
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



