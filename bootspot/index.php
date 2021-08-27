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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/category.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>

<body>

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
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" class = "nav-link" href="category.php" >Comprar</a>
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
							</li>
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

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
								<h1>Assistente de compra</h1>
									<h2>Tem dúvidas e não consegue escolher as melhores chuteiras para si?</h2>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="assistente_compra.php"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Carregue no mais!</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-btn" src="img/banner/banner-img4.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
								<h1>Nike Mercurial</h1>
									<h2>Unlock Speed</h2>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="category_nike.php"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Mais sobre</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-btn" src="img/banner/banner-img.png" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
								<h1>adidas X Ghosted</h1>
									<h2>Unleash Speed</h2>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="category_adidas.php"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Mais sobre</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img2">
									<img class="img-fluid" src="img/banner/banner-img2.png" alt="">
								</div>
							</div>
						</div>
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
								<h1>Puma Ultra</h1>
									<h2>Uncatchable speed</h2>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="category_puma.php"><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Mais sobre</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img3">
									<img class="img-btn" src="img/banner/banner-img3.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Portes de envio grátis</h6>
						<p>Portes de envio grátis em encomedas +100€</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Devoluções</h6>
						<p>Contacte o nosso <a href = "contact.php">suporte</a></p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon" >
							<img src="img/features/f-icon3.png" alt="f-icon3.png">
						</div>
						<h6>24/7 Support</h6>
						<p>Disponível <a href = "contact.php">aqui</a> 24h todos os dias</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>Pagamento seguro</h6>
						<p>Veja <a href = "privacidade.php">aqui</a> a nossa política</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
								<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 href = category_nike.php class="deal-title">Chuteiras Nike</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-150" src="img/category/c2.jpg" alt="">
								<a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 href = category_adidas.php class="deal-title">Chuteiras adidas</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
								<a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 href = category_puma.php class="deal-title">Chuteiras Puma</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
								<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 href = category.php class="deal-title">Chuteiras New Balance</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Ultimos lançamentos</h1>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single product -->

					<?php
				
				
					require("db_connection.php");
					$sql = "SELECT modelos.nome, modelos.tipoSola, modelos.id as id, marcas.nomes as marcas_nome, produtos.preco as preco, modelos_foto.image as foto FROM modelos 
					INNER JOIN marcas INNER JOIN produtos INNER JOIN modelos_foto 
					WHERE modelos.idMarcas = marcas.id AND modelos.id = produtos.idModelos AND modelos.id = modelos_foto.idModelos GROUP BY modelos.id ORDER BY RAND(modelos.id) LIMIT 6";
					$result = $con->query($sql);
					$con->close();	
					?>
				
					<div class='col-lg-2 col-md-2'>
							<div class='single-product'>
									<?php
									while($row = $result->fetch_assoc()) {
										?>
									<div>
									<a href = 'single-product.php?id=<?php echo $row['id'];?>'>
									<img class='img-fluid' src='<?php echo $row['foto']; ?>'alt=''>
									</a>
									<div class='product-details'>
									<h3><a href ='single-product.php?id=<?php echo $row['id'];?>'><?php echo $row['marcas_nome']." ". $row['nome']. " " .$row['tipoSola']; ?></a></h3>
									<div class='prd-bottom'>
									</div>
									</div>
									</div>
									<?php
									}
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Descontos da Semana</h1>
							<p>Aproveite agora os nossos descontos semanais!</p>
						</div>
					</div>
				</div>
				<div class="row">
				<?php
				
				
				require("db_connection.php");
				$sql = "SELECT modelos.nome, modelos.tipoSola, modelos.id as id, marcas.nomes as marcas_nome, produtos.preco as preco, modelos_foto.image as foto FROM modelos 
				INNER JOIN marcas INNER JOIN produtos INNER JOIN modelos_foto 
				WHERE modelos.idMarcas = marcas.id AND modelos.id = produtos.idModelos AND modelos.id = modelos_foto.idModelos GROUP BY modelos.id ORDER BY RAND(marcas.id) LIMIT 6";
				$result = $con->query($sql);
				$con->close();	
				?>
			
				<div class='col-lg-2 col-md-2'>
						<div class='single-product'>
								<?php
								while($row = $result->fetch_assoc()) {
									?>
								<div>
								<a href = 'single-product.php?id=<?php echo $row['id'];?>'>
								<img class='img-fluid' src='<?php echo $row['foto']; ?>'alt=''>
								</a>
								<div class='product-details'>
								<h3><a href ='single-product.php?id=<?php echo $row['id'];?>'><?php echo $row['marcas_nome']." ". $row['nome']. " " .$row['tipoSola']; ?></a></h3>
								<div class='prd-bottom'>
								</div>
								</div>
								</div>
								<?php
								}
								?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section> 

	<!-- Start brand Area -->
	<section class="brand-area section_gap">
		<div class="container">
			<div class="row">
				<a class="col single-img" href="category.php">
					<img class="img-fluid d-block mx-auto" src="img/brand/1.png" alt="">
				</a>
				<a class="col single-img" href="category.php">
					<img class="img-fluid d-block mx-auto" src="img/brand/2.png" alt="">
				</a>
				<a class="col single-img" href="category.php">
					<img class="img-fluid d-block mx-auto" src="img/brand/3.png" alt="">
				</a>
				<a class="col single-img" href="category.php">
					<img class="img-fluid d-block mx-auto" src="img/brand/4.png" alt="">
				</a>
				<a class="col single-img" href="category.php">
					<img class="img-fluid d-block mx-auto" src="img/brand/5.png" alt="">
				</a>
				<a class="col single-img" href="category.php">
					<img class="img-fluid d-block mx-auto" src="img/brand/6.png" alt="">
				</a>
			</div>
		</div>
	</section>
	<!-- End brand Area -->

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

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#eb6c44",
      "text": "#ffffff"
    },
    "button": {
      "background": "#f5d948"
    }
  },
  "showLink": false,
  "theme": "edgeless",
  "type": "opt-out",
  "content": {
    "message": "Este website usa cookies para que obtenhas a melhor experiência no nosso website.",
    "dismiss": "Aceitar Cookies",
    "deny": "Recusar Cookies"
  }
});
</script>
</body>

</html>