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
					  <a class="nav-link" href="pagina-principal.php">P??gina inicial</a>
					</li>
					<li class="nav-item dropdown dropdown-slide">
					  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">An??ncios<span><i class="fa fa-angle-down"></i></span>
					  </a>
	  
					  <!-- Dropdown list -->
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="anuncios.php">An??ncios</a>
						<a class="dropdown-item" href="meus-anuncios.php">Meus an??ncios</a>
					  </div>
					</li>
					<li class="nav-item dropdown dropdown-slide">
					  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						P??ginas <span><i class="fa fa-angle-down"></i></span>
					  </a>
					  <!-- Dropdown list -->
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="sobre-nos.php">Sobre n??s</a>
						<a class="dropdown-item" href="contate-nos.php">Contate-nos</a>
						<a class="dropdown-item" href="perfil-usuario.php">Meu Perfil</a>
						<a class="dropdown-item" href="anuncios.php">Categorias</a>
	  
					  </div>
					</li>
				  </ul>
				  <ul class="navbar-nav ml-auto mt-10">
					<li class="nav-item">
					  <a class="nav-link login-button" href="index.php">Login</a>
					</li>
					<li class="nav-item">
					  <a class="nav-link text-white add-button" style="background-color:#2568B6 ;" href="addServico.php"><i class="fa fa-plus-circle"></i> Adicionar servi??o</a>
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
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="images/user/user-thumb.jpg" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center">Felipe Dutra</h5>
						<p>Entrou em 06 de Fevereiro de 2022</p>
						<a href="perfil-usuario.php" class="btn btn-main-sm">Editar Perfil</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active">
								<a href="meus-anuncios.php"><i class="fa fa-user"></i> Meus Anuncios</a></li>
							<li>
							<li>
								<a href=""><i class="fa fa-cog"></i> Logout</a>
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Deletar Conta</a>
							</li>
						</ul>
					</div>

					<!-- delete-account modal -->
											  <!-- delete account popup modal start-->
                <!-- Modal -->
                <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                        <h6 class="py-2">Quer mesmo deletar essa conta?</h6>
                        <p>Esse processo apagar?? todos os dados e ele n??o pode ser desfeito.</p>
                      </div>
                      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger">Deletar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- delete account popup modal end-->
					<!-- delete-account modal -->

				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">Meus Anuncios</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
							<tr>
								<th>Imagem</th>
								<th>Titulo</th>
								<th class="text-center">Categoria</th>
								<th class="text-center">A????o</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="product-thumb">
									<img width="80px" height="auto" src="images/products/PEDREIRO.webp" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">Pedreiro de ??reas externas</h3>
									<span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>Postado: </strong><time>Jun 27, 2022</time> </span>
									<span class="status active"><strong>Status</strong>Ativo</span>
									<span class="location"><strong>Localiza????o</strong>Lourdes</span>
								</td>
								<td class="product-category"><span class="categories">Pedreiros</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Visualizar" class="view" href="anuncios.php">
													<i class="fa fa-eye"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Editar" class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Deletar" class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							<tr>

								<td class="product-thumb">
									<img width="80px" height="auto" src="images/products/download.jpg" alt="image description"></td>
								<td class="product-details">
									<h3 class="title">Mesa e cadeira de Madeira- Combo</h3>
									<span class="add-id"><strong>Ad ID:</strong> ng3D5hAMHPajQrM</span>
									<span><strong>Postado: </strong><time>Fev 12, 2022</time> </span>
									<span class="status active"><strong>Status</strong>Ativo</span>
									<span class="location"><strong>Localiza????o</strong>Lourdes</span>
								</td>
								<td class="product-category"><span class="categories">Maceneiros</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="View" class="view" href="anuncios.php">
													<i class="fa fa-eye"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Edit" class="edit" href="">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Delete" class="delete" href="">
													<i class="fa fa-trash"></i>
												</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						</tbody>
					</table>

				</div>

				<!-- pagination -->
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
									<span class="sr-only">Pr??ximo</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- pagination -->

			</div>
		</div>
		<!-- Row End -->
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
			<p class="alt-color" style="text-align: justify;">Somos uma empresa especializada em trabalhar juntamente com voc??, para que seu trabalho 
			  seja divulgado da maneira correta e para voc?? que procura contratar algu??m, saia satisfeito com o servi??o 
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
			<p>Copyright ?? <script>
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