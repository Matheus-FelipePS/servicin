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
									<a class="dropdown-item" href="perfil-usuario.php
                                    ">Meu Perfil</a>
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
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!--<div class="about-img">
                    <img src="images/about/about.jpg" class="img-fluid w-100 rounded" alt="">
                </div>-->
            </div>
            <!--<div class="col-lg-6 pt-5 pt-lg-0">-->
                <div class="about-content">
                    <h3 class="font-weight-bold">Quem somos n??s</h3>
                    <p>Somos alunos PUC-MINAS, cursando o curso de Sistemas de Informa????o e atrav??s
                    desse trabalho temos o objetivo de ajudar trabalhadores aut??nomos a divulgarem seus servi??os. Gostar??amos de poder ajudar
                  no mercado informal brasileiro, j?? que essa parte do mercado se mostra com grande dificuldade em divulgar seus servi??os.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading text-center text-capitalize font-weight-bold py-5">
                    <h2>Nosso Time</h2>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="images/about/fotohenrique.jpg" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Henrique Andrade</h5>
                        <p class="card-text">Fundador</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="images/about/fotomatheus.jpg" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Matheus Felipe</h5>
                        <p class="card-text">Fundador</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="images/about/fotocamila.jpg" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Camila Alves</h5>
                        <p class="card-text">Fundadora</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <img class="card-img-top" src="images/about/fotonicole.jpg" class="img-fluid w-100" alt="Card image cap">
                    <div class="card-body bg-gray text-center">
                        <h5 class="card-title">Nicole Louise</h5>
                        <p class="card-text">Fundadora</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ad-post bg-gray py-5">
    <div class="container">
        <form action="#">
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>Anunciar</h3>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Titulo do an??ncio:</h6>
                            <input type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="T??tulo do an??ncio">
                            <h6 class="font-weight-bold pt-4 pb-1">Tipo:</h6>
                            <div class="row px-3">
                                <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white">
                                    <input type="radio" name="itemName" value="personal" id="personal">
                                    <label for="personal" class="py-2">Pessoa</label>
                                </div>
                                <div class="col-lg-4 mr-lg-4 my-2 rounded bg-white ">
                                    <input type="radio" name="itemName" value="business" id="business">
                                    <label for="business" class="py-2">Empresa</label>
                                </div>
                            </div>
                            <h6 class="font-weight-bold pt-4 pb-1">Descri????o:</h6>
                            <textarea name="" id="" class="border p-3 w-100" rows="7" placeholder="Escreva detalhes sobre seu produto"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <h6 class="font-weight-bold pt-4 pb-1">Categoria:</h6>
                            <select name="" id="inputGroupSelect" class="w-100">
                                <option value="1">Selecione uma categoria</option>
                                <option value="2">Pedreiro</option>
                                <option value="3">Marceneiros</option>
                                <option value="4">Bab??</option>
                                <option value="5">Pintor</option>
                                <option value="6">Diarista</option>
                                <option value="7">Professor Particular</option>
                           </select>
                            <div class="price">
                                <h6 class="font-weight-bold pt-4 pb-1">VALOR ($ REAL):</h6>
                                <div class="row px-3">
                                    <div class="col-lg-4 mr-lg-4 rounded bg-white my-2 ">
                                        <input type="text" name="price" class="border-0 py-2 w-100 price" placeholder="Pre??o"
                                            id="price">
                                    </div>
                                    <div class="col-lg-4 mrx-4 rounded bg-white my-2 ">
                                        <input type="checkbox" value="Negotiable" id="Negotiable">
                                        <label for="Negotiable" class="py-2">Negoci??vel</label>
                                    </div>
                                </div>
                            </div>
                            <div class="choose-file text-center my-4 py-4 rounded">
                                <label for="file-upload">
                                    <span class="d-block font-weight-bold text-dark">Fa??a upload de imagens</span>
                                    <span class="d-block">ou</span>
                                    <span class="d-block btn bg-primary text-white my-3 select-files">Selecionar img</span>
                                    <span class="d-block">Tamanho Maximo do Arquivo: 500 KB</span>
                                    <input type="file" class="form-control-file d-none" id="file-upload" name="file">
                                </label>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <!-- Post Your ad end -->

            <!-- seller-information start -->
            <fieldset class="border p-4 my-5 seller-information bg-gray">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Informa????es</h3>
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">Nome:</h6>
                        <input type="text" placeholder="Nome" class="border w-100 p-2">
                        <h6 class="font-weight-bold pt-4 pb-1">N??mero:</h6>
                        <input type="text" placeholder="Numero de contato" class="border w-100 p-2">
                    </div>
                    <div class="col-lg-6">
                        <h6 class="font-weight-bold pt-4 pb-1">E-mail:</h6>
                        <input type="email" placeholder="nome@email.com" class="border w-100 p-2">
                        <h6 class="font-weight-bold pt-4 pb-1">Endere??o:</h6>
                        <input type="text" placeholder="Seu endere??o" class="border w-100 p-2">
                    </div>
                </div>
            </fieldset>
            <!-- seller-information end-->

            <!-- ad-feature start -->
            <fieldset class="border bg-white p-4 my-5 ad-feature bg-gray">
                <div class="row">
                    <div class="col-lg-12">

                        <h3 class="pb-3">Promover an??ncio
                            <span class="float-right"><a class="text-right font-weight-normal text-success" href="#">Ganhe mais reconhecimento pormovendo seus an??ncios</a></span>
                        </h3>

                    </div>
                    <div class="col-lg-6 my-3">
                        <span class="mb-3 d-block">Premium:</span>
                        <ul>
                            <li>
                                <input type="radio" id="regular-ad" name="adfeature">
                                <label for="regular-ad" class="font-weight-bold text-dark py-1">Regular</label>
                                <span>R$9,00</span>
                            </li>
                            <li>
                                <input type="radio" id="Featured-Ads" name="adfeature">
                                <label for="Featured-Ads" class="font-weight-bold text-dark py-1">Top</label>
                                <span>R$39,00</span>
                            </li>
                            <li>
                                <input type="radio" id="urgent-Ads" name="adfeature">
                                <label for="urgent-Ads" class="font-weight-bold text-dark py-1">Urgente</label>
                                <span>R$79,00</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 my-3">
                        <span class="mb-3 d-block">Selecione o m??todo de pagamento</span>
                        <ul>
                            <li>
                                <input type="radio" id="bank-transfer" name="adfeature">
                                <label for="bank-transfer" class="font-weight-bold text-dark py-1">PIX</label>
                            </li>
                            <li>
                                <input type="radio" id="Cheque-Payment" name="adfeature">
                                <label for="Cheque-Payment" class="font-weight-bold text-dark py-1">BOLETO</label>
                            </li>
                            <li>
                                <input type="radio" id="Credit-Card" name="adfeature">
                                <label for="Credit-Card" class="font-weight-bold text-dark py-1">CART??O DE CR??DITO</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </fieldset>
            <!-- ad-feature start -->

            <!-- submit button -->
            <div class="checkbox d-inline-flex">
                <input type="checkbox" id="terms-&-condition" class="mt-1">
            </div>
            <button type="submit" class="btn btn-primary d-block mt-2">Postar An??ncio</button>
        </form>
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