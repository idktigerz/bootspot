<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>BootSpot</title>

	<!--
            CSS
            ============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	
</head>

<body id="category">

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown active">
								<a href="category.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="false"
								 aria-expanded="true">Comprar</a>
								<ul class="dropdown-menu">
									<li class='nav-item'><a class='nav-link' name="nike" href='category_nike.php'>Chuteiras Nike</a></li>
									<li class='nav-item'><a class='nav-link' name="adidas" href='category_adidas.php'>Chuteiras adidas</a></li>
									<li class='nav-item'><a class='nav-link' name="puma" href='category_puma.php'>Chuteiras Puma</a></li>
									<li class='nav-item'><a class='nav-link' name="new_balance" href='category_new_balance.php'>Chuteiras New Balance</a></li>
									<li class='nav-item'><a class='nav-link' name="under_armour" href='category_under_armour.php'>Chuteiras Under Armour</a></li>
									<li class='nav-item'><a class='nav-link' name="umbro" href='category_umbro.php'>Chuteiras Umbro</a></li>
									<li class='nav-item'><a class='nav-link' href='category.php'>Todas as Chuteiras</a></li>
                                    <li class='nav-item'><a class='nav-link' href='assistente_compra.php'>Assistente de compra</a></li>
								</ul>
								<?php
								if(isset($_SESSION["username"])) {
									?>
									<li class='nav-item submenu dropdown'><a href=' #' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'aria-expanded='false'>Olá, <?php echo $_SESSION['username']; ?> !</a>

                                    <ul class='dropdown-menu'>
									<li class='nav-item'><a class='nav-link' href='painel_cliente.php?utilizador=<?php echo $_SESSION['username']; ?>'>A minha conta</a></li> <li class='nav-item'><a class='nav-link' href='logout.php'>Sair/Logout</a></li>
									</ul>
									</li>
							    <?php
								}else{
									echo "<li class='nav-item submenu dropdown'><a href=' #' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'aria-expanded='false'>Conta</a>
                                    <ul class='dropdown-menu'>
									<li class='nav-item'><a class='nav-link' href='login.php'>Entrar</a></li> <li class='nav-item'><a class='nav-link' href='register.php'>Registar</a></li>
									</ul>
									</li>";				
									}
								?>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contactos</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="cart.php" class="cart"><span class="ti-bag"></span></a></li>
							 
						</ul>
					</div>
				</div>
			</nav>
		</div>
		 
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Assistente de compras</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
			<form class='form' action='' method='post'>
            <?php
                if(isset($_POST["preco"]) && isset($_POST["tipo_jogador"]) && isset($_POST["tipo_pe"]) && isset($_POST["relvado"]) && isset($_POST["posicao"])){
					echo"<h3>Os teus resultados já estão prontos!<h3>";
					echo"<h6>Pronto para vê-los? Carrega <a href = category.php>aqui</a></h6>";
				}else{
                    echo"* caractér obrogatório";
                ?>
                <h6>Selecione o preço ideal*</h6>
                <select name=preco[] multiple="mutiple" size="3">
                <option name = "150-200" value= 150-200> 150-200€ </option>
                <option name = "170-220" value= 170-220> 170-220€ </option>
                <option name = "190-240" value= 190-240> 190-240€ </option>
                <option name = "Sem Limite" value= Sem-limite> Sem limite de preço </option>
                </select><br><br>
                
                <h6>Seleciona a tua melhor maneira de jogar*</h6>
                <select name=tipo_jogador[] multiple="mutiple" size="3">
                <option name = "rapido" value= rapido> Sou um jogador rápido </option>
                <option name = "forte" value= forte> Sou um jogador forte fisicamente </option>
                <option name = "agil" value= agil> Sou um jogador ágil </option>
                <option name = "driblador" value= driblador> Sou um jogador driblador </option>
                <option name = "passador" value= passador> Sou um mestre no passe </option>
                <option name = "rematador" value= rematador> Sou preciso com os meus remates </option>
                </select><br><br>

                <h6>Selecione o teu tipo de pé*</h6>
                <select name=tipo_pe[] multiple="mutiple" size="3">
                <option name = "largo" value= largo> Tenho o pé largo </option>
                <option name = "fino" value= fino> Tenho o pé fino </option>
                </select><br><br>

                <h6>Selecione o tipo de relvado que jogas*</h6>
                <select name=relvado[] multiple="mutiple" size="3">
                <option name = "artificial" value= artificial> Jogo num relvado artificial </option>
                <option name = "natural" value= natural> Jogo num relvado natural </option>
                <option name = "relva_mole" value= relva_mole> Jogo num campo de relva mole </option>
                </select><br><br>

                <h6>Selecione a posição em que jogas*</h6>
                <select name=posicao[] multiple="mutiple" size="3">
                <option name = "gr" value= gr> Jogo a guarda-redes </option>
                <option name = "dc" value= dc> Jogo a defesa central</option>
                <option name = "da" value= da> Jogo a defesa-ala</option>
                <option name = "mc" value= mc> Jogo a médio-centro</option>
                <option name = "ma" value= ma> Jogo a médio-ala</option>
                <option name = "extremo" value= extremo> Jogo a extremo direito/esquerdo</option>
                <option name = "avancado" value= avancado> Jogo a ponta-de-lança</option>
                </select><br><br>
                
                <br>
                <div class='col-md-12 form-group'>
					<button type='submit' value='submit' class='primary-btn'>Enviar</button>
	            </div>
				<?php
                }
                ?>
                </form>
                
                
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	 
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Sobre nós</h6>
						<p>
							A BootSpot foi criada a 28 de setembro de 2020. Esta empresa tem um único objetivo sendo ele dar aos utilizdaores uma assistência na compra de umas chuteiras.
						</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"> 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
 
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<!-- Modal Quick Product View -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
</body>

</html>