<?php
  include('conexao.php');
  session_start();
  if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email'])==0){

      echo "<script language='javascript' type='text/javascript'>alert('Seu email não pode ser nula');window.location.href='index.php';</script>";


    }else if(strlen($_POST['senha'])==0){

      echo "<script language='javascript' type='text/javascript'>alert('Sua senha não pode ser nula');window.location.href='index.php';</script>";


    }else {

      if($_POST['senha']==$_POST['senha1']){
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $sql_code = "INSERT INTO usuarios (`id`, `email`, `senha`) VALUES (NULL, '{$email}', '{$senha}')";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $_SESSION['email']=$email;
        $_SESSION['senha']=$senha;
        // Protótipo de sessão q será iniciada
        // $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        // $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        // $usuario = $sql_query->fetch_assoc();
        // session_start();
        // $_SESSION['email'] = $usuario['email'];
        // $_SESSION['senha'] = $usuario['senha'];

        echo "<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php';</script>";

      }else{
        echo "<script language='javascript' type='text/javascript'>alert('Senhas diferentes');window.location.href='index.php';</script>";

      }

    }
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Serviçin</title>
  
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
          <nav class="navbar navbar-expand-lg navbar-light navigation justify-content-center">
            <a class="navbar-brand" href="pagina-principal.php">
              <img src="images/logoOficial.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="pagina-principal.php">Página inicial</a>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Anúncios<span><i class="fa fa-angle-down"></i></span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="anuncios.php">Anúncios</a>
                    <a class="dropdown-item" href="meus-anuncios.php">Meus anúncios</a>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Páginas <span><i class="fa fa-angle-down"></i></span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="sobre-nos.php">Sobre nós</a>
                    <a class="dropdown-item" href="contate-nos.php">Contate-nos</a>
                    <a class="dropdown-item" href="perfil-usuario.php">Meu Perfil</a>
                    <a class="dropdown-item" href="anuncios.php">Categorias</a>
  
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-slide">
                  <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Modo de exibição <span><i class="fa fa-angle-down"></i></span>
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="anuncios.php">Em cubos</a>
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto mt-10">
                <li class="nav-item">
                  <a class="nav-link login-button" href="index.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white add-button" href="single.html"><i class="fa fa-plus-circle"></i> Adicionar serviço</a>
                </li>
              </ul>
            </div> -->
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border border">
                    <h3 class="bg-gray p-4">Registrar</h3>
                    <form action="#" method="POST">
                        <fieldset class="p-4">
                            <input type="email" placeholder="Email*" value="" name="email" class="border p-3 w-100 my-2">
                            <input type="password" placeholder="Senha*" value="" name="senha1" class="border p-3 w-100 my-2">
                            <input type="password" placeholder="Confirme a senha*" value="" name="senha" class="border p-3 w-100 my-2">
                            <button type="submit" class="d-block py-3 px-4 bg-primary text-white border-0 rounded font-weight-bold">Registrar</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
<!-- Container Start -->
<div class="container">
<div class="row justify-content-center">
  <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
    <!-- About -->
    <div class="block about">
      <!-- footer logo -->
      <img src="images/logoOficial.png" alt="">
      <!-- description -->
      <p class="alt-color" style="text-align: justify;" >Somos uma empresa especializada em trabalhar juntamente com você, para que seu trabalho 
        seja divulgado da maneira correta e para você que procura contratar alguém, saia satisfeito com o serviço 
      dos nossos trabalhadores parceiros.</p>
    </div>
  </div>
  <!-- Link list -->
  <!-- <div class="col-lg-2 offset-lg-1 col-md-3">
    <div class="block">
      <h4>Site Pages</h4>
      <ul>
        <li><a href="#">Boston</a></li>
        <li><a href="#">How It works</a></li>
        <li><a href="#">Deals & Coupons</a></li>
        <li><a href="#">Articls & Tips</a></li>
        <li><a href="terms-condition.html">Terms & Conditions</a></li>
      </ul>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
    <div class="block">
      <h4>Admin Pages</h4>
      <ul>
        <li><a href="anuncios.php">Category</a></li>
        <li><a href="single.html">Single Page</a></li>
        <li><a href="store.html">Store Single</a></li>
        <li><a href="single-blog.html">Single Post</a>
        </li>
        <li><a href="blog.html">Blog</a></li>



      </ul>
    </div> -->
  </div>
  <!-- Promotion -->
  <div class="col-lg-4 col-md-7">
    <!-- App promotion -->
    <!-- <div class="block-2 app-promotion">
      <div class="mobile d-flex">
        <a href="">
          <img src="images/footer/phone-icon.png" alt="mobile-icon">
        </a>
        <p>Baixe o aplicativo mobile</p>
      </div>
      <div class="download-btn d-flex my-3">
        <a href="#"><img src="images/apps/google-play-store.png" class="img-fluid" alt=""></a>
        <a href="#" class=" ml-3"><img src="images/apps/apple-app-store.png" class="img-fluid" alt=""></a>
      </div>
    </div> -->
  </div>
</div>
</div>
<!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
<!-- Container Start -->
<div class="container">
<div class="row">
  <div class="col-sm-6 col-12">
    <!-- Copyright -->
    <div class="copyright">
      <p>Copyright © <script>
          var CurrentYear = new Date().getFullYear()
          document.write(CurrentYear)
        </script>. All Rights Reserved, theme by <a class="text-primary" href="index.php" target="_blank">servicin.com</a></p>
    </div>
  </div>
  <div class="col-sm-6 col-12">
    <!-- Social Icons -->
    <ul class="social-media-icons text-right">
      <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
      <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
      <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
      <li><a class="fa fa-vimeo" href=""></a></li>
    </ul>
  </div>
</div>
</div>
<!-- Container End -->
<!-- To Top -->
<div class="top-to">
<a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/popper.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap-slider.js"></script>
<!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/script.js"></script>

</body>

</html>