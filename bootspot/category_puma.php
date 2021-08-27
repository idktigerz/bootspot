<?php
    session_start();
?>
<!DOCTYPE html>
<html lang='zxx' class='no-js'>

<head>
	<!-- Mobile Specific Meta -->
	<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
	<!-- Favicon-->
	<link rel='shortcut icon' href='img/fav.png'>
	<!-- Author Meta -->
	<meta name='author' content='CodePixar'>
	<!-- Meta Description -->
	<meta name='description' content=''>
	<!-- Meta Keyword -->
	<meta name='keywords' content=''>
	<!-- meta character set -->
	<meta charset='UTF-8'>
	<!-- Site Title -->
	<title>BootSpot</title>

	<!--
            CSS
            ============================================= -->
	<link rel='stylesheet' href='css/linearicons.css'>
	<link rel='stylesheet' href='css/owl.carousel.css'>
	<link rel='stylesheet' href='css/font-awesome.min.css'>
	<link rel='stylesheet' href='css/themify-icons.css'>
	<link rel='stylesheet' href='css/nice-select.css'>
	<link rel='stylesheet' href='css/nouislider.min.css'>
	<link rel='stylesheet' href='css/bootstrap.css'>
	<link rel='stylesheet' href='css/main.css'>
	<link rel='stylesheet' href='css/category.css'>
</head>

<body id='category'>

	<!-- Start Header Area -->
	<header class='header_area sticky-header'>
		<div class='main_menu'>
			<nav class='navbar navbar-expand-lg navbar-light main_box'>
				<div class='container'>
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class='navbar-brand logo_h' href='index.php'><img src='img/logo.png' alt='></a>
					<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
					 aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class='collapse navbar-collapse offset' id='navbarSupportedContent'>
						<ul class='nav navbar-nav menu_nav ml-auto'>
							<li class='nav-item'><a class='nav-link' href='index.php'>Home</a></li>
							<li class='nav-item submenu dropdown active'>
								<a href='category.php' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='false'
								 aria-expanded='true'>Comprar</a>
								<ul class='dropdown-menu'>
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
								if(isset($_SESSION['username'])) {
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
							<li class='nav-item'><a class='nav-link' href='contact.php'>Contactos</a></li>
						</ul>
						<ul class='nav navbar-nav navbar-right'>
							<li class='nav-item'><a href='cart.php' class='cart'><span class='ti-bag'></span></a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- Start Banner Area -->
	<section class='banner-area organic-breadcrumb'>
		<div class='container'>
			<div class='breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end'>
				<div class='col-first'>
					<h1>Chuteiras Puma</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class='container'>
		<div class='row'>
			<div class='col-xl-3 col-lg-4 col-md-5'>
				<div class='sidebar-categories'>
					<div class='head'>Filtros</div>
					<ul class='main-categories'>
						<li class='filter-list'><input class='pixel-radio' type='radio' id='pele_sintetica' name='brand'><label for='pele_sintetica'>Pele sintética<span></span></label></li>
								<li class='filter-list'><input class='pixel-radio' type='radio' id='pele_natural' name='brand'><label for='pele_natural'>Pele Natural<span></span></label></li>
					</ul>
				</div>
				<div class='sidebar-filter mt-50'>
					<div class='common-filter'>
						<div class='head'>Marcas</div>
						<form action='#'>
							<ul>
								<li class='filter-list'><input class='pixel-radio' type='radio' id='new_balance' name='brand' checked><label for='puma'>Puma<span>
									</span></label></li>
							</ul>
						</form>
					</div>
					<div class='common-filter'>
						<div class='head'>Tipo de sola</div>
						<form action='#'>
							<ul>
								<li class='filter-list'><input class='pixel-radio' type='radio' id='sintetico' name='color'><label for='sintetico'>Para Sintético<span></span></label></li>
								<li class='filter-list'><input class='pixel-radio' type='radio' id='relvado' name='color'><label for='relvado'>Para Relvado<span></span></label></li>
								<li class='filter-list'><input class='pixel-radio' type='radio' id='pitons_aluminio' name='color'><label for='pitons_aluminio'>Pitõns de Aluminio<span></span></label></li>
							</ul>
						</form>
					</div>
					  
				</div>
			</div>
			<div class='col-xl-9 col-lg-8 col-md-7'>
				<!-- Start Filter Bar -->
				<div class='filter-bar d-flex flex-wrap align-items-center'>
					<div class='sorting'>
						<select>
							<option value='1'>Default sorting</option>
							<option value='1'>Default sorting</option>
							<option value='1'>Default sorting</option>
						</select>
					</div>
					<div class='sorting mr-auto'>
						<select>
							<option value='1'>Show 12</option>
							<option value='1'>Show 36</option>
							<option value='1'>Show 48</option>
						</select>
					</div>
					<div class='pagination'>
						<a href='#' class='prev-arrow'><i class='fa fa-long-arrow-left' aria-hidden='true'></i></a>
						<a href='#' class='active'>1</a>
						<a href='#'>2</a>
						<a href='#'>3</a>
						<a href='#' class='dot-dot'><i class='fa fa-ellipsis-h' aria-hidden='true'></i></a>
						<a href='#'>6</a>
						<a href='#' class='next-arrow'><i class='fa fa-long-arrow-right' aria-hidden='true'></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				
				<?php
				
				// Create connection
				require("db_connection.php");
				$sql = "SELECT modelos.nome, modelos.tipoSola, modelos.id as id, marcas.nomes as marcas_nome, produtos.preco as preco, modelos_foto.image as foto FROM modelos 
				INNER JOIN marcas INNER JOIN produtos INNER JOIN modelos_foto 
				WHERE modelos.idMarcas = marcas.id AND modelos.id = produtos.idModelos AND modelos.id = modelos_foto.idModelos AND marcas.id = 3 GROUP BY modelos.id ORDER BY RAND(modelos.id)";
				$result = $con->query($sql);
				$con->close();	
				?>
				
				
				<section class='lattest-product-area pb-40 category-list'>
					<div class='row'>  
						<div class='col-lg-4 col-md-6'>
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
									<div class='price'>
									<h6><?php echo $row['preco']; ?>€</h6>
									</div>
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
				</section>
				<!-- End Filter Bar -->
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
	 

	<script src='js/vendor/jquery-2.2.4.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js' integrity='sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4'
	 crossorigin='anonymous'></script>
	<script src='js/vendor/bootstrap.min.js'></script>
	<script src='js/jquery.ajaxchimp.min.js'></script>
	<script src='js/jquery.nice-select.min.js'></script>
	<script src='js/jquery.sticky.js'></script>
	<script src='js/nouislider.min.js'></script>
	<script src='js/jquery.magnific-popup.min.js'></script>
	<script src='js/owl.carousel.min.js'></script>
	<!--gmaps Js-->
	<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE'></script>
	<script src='js/gmaps.min.js'></script>
	<script src='js/main.js'></script>
	<script src='https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js' data-cfasync='false'></script>
</body>

</html>