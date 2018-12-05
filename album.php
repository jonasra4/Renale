<?php
$album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('ID do Album não especificada.');
$album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die('Nome do Album não especificado.');
 
$page_title = "{$album_name}";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Renale</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> -->
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

  </head>

  <body id="noticias">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="img/logos/logoRenale.png" class="img-fluid"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="index.html">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Quem Somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#http://renalenefrologia-com.umbler.net/noticias.php">Notícas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Tratamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">PT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- "Álbuns" de Notícias -->
    <section id="gradiente">

        <div class="container-fluid" >
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8"> <!-- id="rins-horizontal" -->
                    <!--<div class="row" >-->
                        <!-- PHP Code Here -->
                        <?php
                            echo "<div class='container-fluid' id='about'>";
                                echo "<div class='row'>";
                                    echo "<div class='col-lg-3'>";
                                        echo "<h5 style='color=#ffffff;'>";
                                            echo "<a href='http://renalenefrologia-com.umbler.net/index.php#noticias'>Notícias</a> / {$page_title}";
                                        echo "</h5>";
                                    echo "</div>";
                                echo "</div>";
                                echo "<div class='row align-items-center'>";
                                    echo "<div class='col-lg-12'>";
                                        echo "<div class='row'>";
                             
                            $access_token="EAAfdsSLw7TQBABQerXaLZAkU6u430ZAmsFtjvvyZBZAaK7ZAPErTymeZCIyEhHXZAypxuEZCiMvFS8D9uZCxaNfBcr32XfMpmJrzRZBo8NaZCCSSdWtbOQJ28xZAFNRHACJkx7xmkR4nz54dcz7rEWPk9b1ysI1pOZCacpq64CIAliZAJxzAZDZD";
                                    
                            //Parte modificada
                            $json_link_2 = "https://graph.facebook.com/v2.3/{$album_id}/photos?fields=source,images,name&access_token={$access_token}";
                            $json_2 = file_get_contents($json_link_2);
                            $obj_2 = json_decode($json_2, true, 512, JSON_BIGINT_AS_STRING);
                            $photo_count = count($obj_2['data']);
                                        
                            for($y=0; $y<$photo_count; $y++){
                                            
                                $source = isset($obj_2['data'][$y]['images'][0]['source']) ? $obj_2['data'][$y]['images'][0]['source'] : ""; //hd image
                                $name_2 = isset($obj_2['data'][$y]['name']) ? $obj_2['data'][$y]['name'] : ""; //caption
                                $image_id = isset($obj_2['data'][$y]['id']) ? $obj_2['data'][$y]['id'] : ""; 
                                            
                                echo "<div class='col-md-6 col-lg-6 col-sm-6 col-12'>";
                                    echo "<div class='card'>";
                                        echo "<a href='{$source}'>";
                                            echo "<img class='card-img-top' src='https://graph.facebook.com/v2.3/{$image_id}/picture?access_token={$access_token}' alt=''>";
                                            //echo "<div class='photo-thumb' style='background: url({$source}) 50% 50% no-repeat;'>";
                                            //echo "</div>";
                                        echo "</a>";
                                        echo "<div class='card-body'>";
                                            echo "<h3>";
                                                echo "<a class='card-title'style='color:#363636' href='{$show_pictures_link}'>{$name}</a>";
                                            echo "</h3>";
                                            echo "<p class='card-text'>";
                                                echo "<div><a href='{$link}' style='color:#3C357C;' target='_blank'>Veja no Facebook</a></div>";
                                                //echo $description;
                                                echo $name_2;
                                            echo "</p>";                                        
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                            }    
                        ?>
                    </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
    </section>
    
    <!-- Formulário de Contato -->
    <section  id="contato">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-sm-12 col-12 ">
              <div class="row">
                <div class="col-lg-12 col-12 col-contato">
                  <div class="jumbotron jumbotron-azul">
                        <h3 class="fale-conosco">FALE <br> CONOSCO!</h3>
                        <div class="row">
                          <div class="col-lg-1 col-1">
                            <img src="img/icones/localization.png" alt="">
                          </div>
                          <div class="col-lg-11 col-11">
                            <p>Av. Antônio Basílio, 4117 - Nova Descoberta, Natal - RN, 59056-425</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-1 col-1">
                            <img src="img/icones/localization.png" alt="">
                          </div>
                          <div class="col-lg-11 col-11">
                            <p>renale@gmail.com</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-1 col-1">
                            <img src="img/icones/localization.png" alt="">
                          </div>
                          <div class="col-lg-11 col-11">
                            <p>(84) 8374-3423</p>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12 col-12 col-contato">
                  <div class="jumbotron">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"  placeholder="Nome"  aria-label="Username" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group mb-3">
                        <input type="text" class="form-control"  placeholder="E-mail" aria-label="Username" aria-describedby="basic-addon1">
                      </div>

                      <div class="input-group">
                        <div class="input-group-prepend">
                        </div>
                        <textarea class="form-control" placeholder="Escreva aqui sua mensagem" aria-label="With textarea"></textarea>
                      </div>
                      <button type="button" class="btn btn-primary btn-lg btn-block">Enviar</button>
                    </div>
                  </div>
                </div>
            </div>
            
            <!-- Mapa -->
            <div class="col-lg-8 col-sm-12 col-12 col-contato ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.2705176174754!2d-35.20207974951936!3d-5.817418758966796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff2c0dbfff75%3A0x334153be2963e540!2sRenale!5e0!3m2!1spt-BR!2sbr!4v1543509683035" width="100%" height="100%" border="0px" frameborder="0" style="border:0px 0px" allowfullscreen></iframe>
            </div>

        </div>

    </section>


    <!-- Footer -->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 footMargin"></div>
          <div class="col-lg-2 col-12 footMargin text-center">
            <img src="img/logos/logoFooter.png" class="img-fluid">
            <br>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
          </div>
          <div class="col-lg-1 footMargin"></div>

          <div class="col-lg-2 col-12 footMargin">
            <ul>
              <a href="#"><li>Início</li></a>
              <a href="#"><li>Quem Somos</li></a>
              <a href="#"><li>Notícias</li></a>
              <a href="#"><li>Tratamentos</li></a>
              <br>
              <a href="#"><li>Idioma PT</li></a>

            </ul>
          </div>
          <div class="col-lg-2 col-12 footMargin">
            <p>
              Av. Antônio Basílio, 4117  <br>Nova Descoberta, Natal RN, 59056-425
            </p>
            <p>renale@gmail.com</p>
            <p>(84) 3345-2600</p>
          </div>
          <div class="col-lg-3 col-12 footMargin">
            <ul>
              <p>Horário  de <br> Funcionameto</p>

              <li>seg:  06:00 – 17:00</li>
              <li>ter:  06:00 – 17:00</li>
              <li>qua:  06:00 – 17:00</li>
              <li>qui:  06:00 – 17:00</li>
              <li>sex:  06:00 – 17:00</li>
              <li>sab:  06:00 – 17:00</li>
              <li>dom:  06:00 – 17:00</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>

