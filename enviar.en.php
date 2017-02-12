<?php

$nome=$_POST[nome];
$email=$_POST[email];
$assunto=$_POST[assunto];
$mensagem=$_POST[mensagem];

mail("gilvanfcf77@gmail.com","$assunto","
Nome: $nome
Email: $email
Assunto: $assunto
Mensagem: $mensagem","FROM:$nome<$email>");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RC Hidropneumática</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/dropdown.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/category.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/clients-slider.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/categorias.css" rel="stylesheet">
	  <link rel="stylesheet" href="css/footer.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">

    .style6 {color: #000000}
    .style13 {
    font-size: 18px;
    color: #000000;
    font-weight: bold;
    }
    .style15 {color: #FFFFFF; font-size: 18px; font-weight: bold; }
    </style>

</head><!--/head-->

<body id="home" class="homepage">
<header id="header">
<nav id="main-menu" class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="banner">
<div class="top-navbar">
    <div class="top-box">
      <div class="col-md-6">
        <p align="left">Hydraulic and pneumatic products and services.</p>
      </div>

        <div class="col-md-6 col2">
          <!-- <ul> -->
            <!-- <li> -->
                <a href="mailto:contato@rchidro.com.br" style="color:#fff;">
                  <img alt="Mail" src="images/icons/mail.png">
                  contato@rchidro.com.br
                </a>
            <!-- </li> -->

            <!-- <li> -->
                <a><img src="images/icons/phone.png" alt="Phone">
                  (85) 3033-9600
                </a>
            <!-- </li> -->
            <!-- <li> -->
              <a class="flag" href="index.en.html">
                <img alt="Change language" src="images/icons/uk.png">
              </a>
            <!-- </li> -->
          <!-- </ul> -->
        </div>
      </div>
    </div>

              <div class="container">

                <span class="icon-bar"></span>
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="logo"></a>

                  </div>

                  <div class="collapse navbar-collapse navbar-right">
                      <ul class="nav navbar-nav">
                          <li class="scroll active"><a href="#home">Home </a></li>
                          <li class="scroll"><a href="#about">About Us</a></li>
                          <li class="scroll"><a href="#history">Our History</a></li>
                          <li class="scroll" style="z-index: 2">
        <!--                       <div class="product-dropdown" style="z-index: 2;"> -->
                                  <a onclick="dropDownProducts()" class="dropbtn" id="product">
                                  Our Products
                                  </a>
                                      <div id="products" class="product-content">
                                          <a href="#produtos">Product Line</a>
                                          <a href="produtos/hidraulica/acessorios.html">Hydraulics</a>
                                          <a href="produtos/pneumatica/cilindros.html">Pneumatic</a>
                                          <a href="produtos/mangueiras/hidraulicas.html">Hoses</a>
                                          <a href="produtos/acessorios/abracadeiras.html">Accessories</a>
                                      </div>
                              <!-- </div> -->
                          </li>

                          <li class="scroll" style="z-index: 1;"><a href="#clients">Partners</a></li>
                          <li class="scroll" style="z-index: 1;"><a href="#local">Localization</a></li>
                          <li class="scroll" style="z-index: 1;"><a href="#contact">Contact</a></li>
                          <!-- <li class="scroll" style="z-index: 1;"><a href="#contact">Fale conosco</a></li> -->

                        </ul>

                  </div>

              </div><!--/.container-->
          </nav><!--/nav-->
      </header><!--/header-->
    <br><br>

  <section id="message">
    <br><br>
    <div class="text-center col-sm-12">
      <h3>Your message has been sent successfully. We will contact you as soon as possible.</h3>
    </div>
    <br><br>
  </section>

  <footer id="" class="footer-distributed">

			<div class="footer-left">
        <img src="images/logo.png" alt="RC-Hidropneumática">

				<p class="footer-links">
					<a href="#home">Home</a>
					·
					<a href="#sobre">About Us</a>
					·
					<a href="#history">Our History</a>
					·
					<a href="#produtos">Products</a>
					·
					<a href="#clients">Partners</a>
					·
					<a href="#local">Localization</a>
          <!-- ·
          <a href="#contato">Contato</a> -->
				</p>

				<p class="footer-company-name">Developed by GTi Engenharia Jr. &copy; 2016</p>
			</div>
			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Avenida Godofredo Maciel nª 3374</span> Fortaleza, CE</p>
				</div>


				<div>
					<i class="fa fa-phone"></i>
          <p>(85) 3033-9600</p>
          <p>(85) 98956-8912</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:vendas01@rchidro.com.br">vendas01@rchidro.com.br</a></p>
          <p style="margin-left:4.7em"><a href="mailto:contato@rchidro.com.br">contato@rchidro.com.br</a></p>
        </div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
          RC Hidropneumática stands out for its services and the distribution of quality hydraulic and pneumatic materials.
        </p>
        <div class="footer-icons">

					<a href="https://www.facebook.com/pages/Rc-Hidropneumatica/458223964372457?fref=ts"><i class="fa fa-facebook"></i></a>
					<!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
					<a href="https://plus.google.com/100538727823648008927?hl=pt_BR"><i class="fa fa-google-plus"></i></a>
					<!-- <a href="#"><i class="fa fa-github"></i></a> -->

				</div>

			</div>

		</footer>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
     -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	  <script src="js/scrolling-nav.js"></script>
    <script type="text/javascript" src="js/map.js"></script>
    <script type="text/javascript" src="js/dropdown.js"></script>
    <!-- <script src="//code.jquery.com/jquery-2.1.4.min.js"></script> -->
    <script src="js/clients-slider.js"></script>

</body>
</html>
