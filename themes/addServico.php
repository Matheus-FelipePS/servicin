<?php
  include('conexao.php');
  session_start();
  $_SESSION['user'] = $_SESSION['user'];
  $_SESSION['senha'] = $_SESSION['senha'];
  if(isset($_POST['titulo']) && isset($_POST['mensagem']) && isset($_FILES['ilustracao']) && isset($_POST['categoria']) && isset($_POST['email'])) {

    $titulo = $mysqli->real_escape_string($_POST['titulo']);
    $mensagem = $mysqli->real_escape_string($_POST['mensagem']);
    $categoria = $mysqli->real_escape_string($_POST['categoria']);
    $dono = $mysqli->real_escape_string($_POST['email']);
    
    $id = $_SESSION['user'];

    $ilustracao = $_FILES['ilustracao'];
    
    $pasta = "arquivos/";
    $nomeDoArquivo = $ilustracao['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));
    
    if($extensao != 'jpg' && $extensao != 'png'){
      die("Tipo do arquivo não aceito.");
    }
    $localilustracao = $pasta . $novoNomeDoArquivo . "." . $extensao;
    $deuCerto = move_uploaded_file($ilustracao["tmp_name"], $localilustracao);
    $_SESSION['ilustracao'] = $localilustracao;
    if($deuCerto){
      $mysqli->query("INSERT INTO imagens_perfil (nome_img, path, usuario_id) VALUES ('$novoNomeDoArquivo', '$localilustracao', '$id')") or die($mysqli->error);
    }
    
    $sql_code = "INSERT INTO anuncio (`dono`, `descricao`, `usuario_id`, `categoria_id`, `titulo`, `imagem_path`) VALUES ('{$dono}', '{$mensagem}', '{$id}', '{$categoria}', '{$titulo}', '{$localilustracao}')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    
    echo "<script language='javascript' type='text/javascript'>alert('Anuncio enviado com sucesso!');window.location.href='index.php';</script>";
    
    header("Location: anuncios.php");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Servicin</title>
  <link href="img/favicon.png" rel="shortcut icon">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap-slider.css">
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
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

  <section class="container">
    <div class="col-md-12">
      <form enctype="multipart/form-data" method="POST" action="">
        <fieldset class="p-4">
          <div class="form-group">
            <div class="row">
              <div class="col-lg-6 py-2">
                <input name="titulo" type="text" placeholder="Título *" class="form-control" required>
              </div>
              <div class="col-lg-6 pt-2">
                <input name="email" type="email" placeholder="Email *" value="<?php echo isset($_SESSION['email']) ? ($_SESSION['email']) : '';?>" class="form-control" required>
              </div>
            </div>
          </div>
          <select name="categoria" id="algum" class="form-control w-100">
            <option value="">Selecione sua categoria</option>
            <option value="1">Diarista</option>
            <option value="3>Pintor</option>
            <option value="5">Pedreiro</option>
            <option value="7">Marceneiro</option>
            <option value="9">Eletricista</option>
          </select>
          <textarea name="mensagem" id=""  placeholder="Mensagem *" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
          <div class="form-group">
						<div class="widget personal-info">
							<h3 class="widget-header user">Adicionar foto</h3>
								<div class="form-group choose-file d-inline-flex">
									<i class="fa fa-user text-center px-3"></i>
									<input type="file" class="form-control-file mt-2 pt-1" name="ilustracao" id="input-file">
								</div>
						</div>
					</div>
          <div class="btn-grounp">
            <button type="submit" class="btn btn-primary mt-2 float-right">ENVIAR</button>
          </div>
        </fieldset>
      </form>
    </div>
  </section>


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