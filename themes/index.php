<?php
  include('conexao.php');
  session_start();
  // $_SESSION['user'] = $usuario['id'];
  // $_SESSION['senha'] = $usuario['senha'];

  if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email'])==0){

      echo "<script language='javascript' type='text/javascript'>alert('Preencha seu email corretamente');window.location.href='index.php';</script>";


    }else if(strlen($_POST['senha'])==0){

      echo "<script language='javascript' type='text/javascript'>alert('Preencha sua senha corretamente');window.location.href='index.php';</script>";
      // header("Location: index.php");


    }else {

      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
      $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if($quantidade == 1){

        $usuario = $sql_query->fetch_assoc();
        if(!isset($_SESSION)){
          session_start();
        }
        $_SESSION['email']= $usuario['email'];
        $_SESSION['senha']= $usuario['senha'];
        $_SESSION['user'] = $usuario['id'];

      header("Location: pagina-principal.php");

      }else{
        echo "<script language='javascript' type='text/javascript'>alert('Falha ao logar! E-mail ou senha incorretos');window.location.href='index.php';</script>";
        sleep(1);
        // header("Location: index.php");

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
          <nav class="navbar navbar-expand-lg navbar-light navigation justify-content-center">
            <img src="images/logoOficial.png" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Login</h3>
                    <form action="#" method="POST">
                        <fieldset class="p-4">
                            <input type="text" placeholder="Nome de usuário" value="<?php echo isset($_SESSION['email']) ? isset($_SESSION['email']) : '';?>" name="email" class="border p-3 w-100 my-2">
                            <input type="password" placeholder="Senha" name="senha" value="<?php echo isset($_SESSION['senha']) ? $_SESSION['senha'] : '' ;?>" class="border p-3 w-100 my-2">
                            <!-- <div class="loggedin-forgot">
                                    <input type="checkbox" id="keep-me-logged-in">
                                    <label for="keep-me-logged-in" class="pt-3 pb-2">Me mantenha logado</label>
                            </div> -->
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Log in</button>
                            <!-- <a class="mt-3 d-block  text-primary" href="#">Esqueceu a senha?</a> -->
                            <a class="mt-3 d-inline-block text-primary" href="registrar.php">Registrar</a>
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