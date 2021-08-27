<?php
    session_start();
    if(!isset($_SESSION['username'])) {
        header('Location: login.php');
        exit();
    }
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
	<meta name='description' content='>
	<!-- Meta Keyword -->
	<meta name='keywords' content='>
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
								<a href='category.php' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'
								 aria-expanded='false'>Comprar</a>
								<ul class='dropdown-menu'>
									<li class='nav-item'><a class='nav-link' name='nike' href='category_nike.php'>Chuteiras Nike</a></li>
									<li class='nav-item'><a class='nav-link' name='adidas' href='category_adidas.php'>Chuteiras adidas</a></li>
									<li class='nav-item'><a class='nav-link' name='puma' href='category_puma.php'>Chuteiras Puma</a></li>
									<li class='nav-item'><a class='nav-link' name='new_balance' href='category_new_balance.php'>Chuteiras New Balance</a></li>
									<li class='nav-item'><a class='nav-link' name='under_armour' href='category_under_armour.php'>Chuteiras Under Armour</a></li>
									<li class='nav-item'><a class='nav-link' name='umbro' href='category_umbro.php'>Chuteiras Umbro</a></li>
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
									echo "<li class='nav-item submenu dropdown'><a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'aria-expanded='false'>Conta</a>
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
							<li class='nav-item'>
								<button class='search'><span class='lnr lnr-magnifier' id='search'></span></button>
							</li>
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
					<h1>Alterar informações de conta</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<?php
	require('db_connection.php');
	if(isset($_GET['utilizador'])){
		$username = $_GET['utilizador'];
        $query = mysqli_query($con,"SELECT * FROM utilizadores"); // select query
        $result = mysqli_fetch_array($query); // fetch data

        $nome_completo = filter_input(INPUT_POST, 'nome_completo');
        $morada = filter_input(INPUT_POST, 'morada');
		$nrTelemovel = filter_input(INPUT_POST, 'nrTelemovel');
        $genero = filter_input(INPUT_POST, 'genero');
        
        if(isset($_POST['edit'])) // when click on Update button
                {
                    $nome_completo=$_POST['nome_completo'];
                    $morada=$_POST['morada'];
					$nrTelemovel=$_POST['nrTelemovel'];
                    $genero=$_POST['genero'];
                    
                    $edit = mysqli_query($con,"UPDATE utilizadores SET nome_completo='$nome_completo', morada='$morada', nrTelemovel='$nrTelemovel', genero='$genero' WHERE username='$username'");
                    
                    if($edit)
                    {
                        mysqli_close($con); // Close connection
						echo "<div class='col-md-12 form-group'>
						<h3>Informações alteradas!</h3>
						<h3>Ir para </h3><a href = 'painel_cliente.php?utilizador=".$_SESSION['username']."'>Painel de cliente</a>
						</div>";
                        exit;
                    }
                    else
                    {
                        echo mysqli_error($con);    
                    }    	
                }
	}
	echo"
	<form class='form' action='' method='post'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 form-group'>
				<h6> Nome Completo </h6>
				<input type='text' class='form-control' id='nome_completo' name='nome_completo' placeholder='Nome Completo' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Nome Completo''' required />
				<br>
			</div>
			<div class='col-md-12 form-group'>
				<h6> Morada </h6>
				<input type='text' class='form-control' id='morada' name='morada' placeholder='Morada' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Morada'' required />
				<br>
			</div>
			<div class='col-xl-3 col-lg-4 col-md-5'>
				<h6> Número de Telemóvel </h6>
				<input type='text' class='form-control' id='nrTelemovel' name='nrTelemovel' placeholder='Número de telemóvel' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Número de telemóvel'' required />
				<br>
			</div>
			<div class='col-xl-3 col-lg-4 col-md-5'>
			<h6>Género</h6>
			<input type='text' class='form-control' id='genero' name='genero' placeholder='Género' onfocus='this.placeholder = ''' onblur='this.placeholder = 'Género'' required />
				<br>
			</div>
			<div class='col-md-12 form-group'>
				<button type='submit' value='submit' name='edit' class='primary-btn'>Alterar</button>
			</div>
		</div>		
	</div>
	</form>";
		?>
	<!-- Start related-product Area -->
	 
	<!-- End related-product Area -->

	<!-- start footer Area -->
	<footer class='footer-area section_gap'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-3  col-md-6 col-sm-6'>
					<div class='single-footer-widget'>
						<h6>Sobre nós</h6>
						<p>
							A BootSpot foi criada a 28 de setembro de 2020. Esta empresa tem um único objetivo sendo ele dar aos utilizdaores uma assistência na compra de umas chuteiras.
						</p>
					</div>
				</div>
				<div class='col-lg-4  col-md-6 col-sm-6'>
					<div class='single-footer-widget'>
						<h6>Newsletter</h6>
						<p>Fica a par de todas as novidades!</p>
						<div class='' id='mc_embed_signup'>

							<form target='_blank' novalidate='true' action='https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01'
							 method='get' class='form-inline'>

								<div class='d-flex flex-row'>

								<input type="email" class="form-control" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required />


									<button class='click-btn btn btn-default'><i class='fa fa-long-arrow-right' aria-hidden='true'></i></button>
									<div style='position: absolute; left: -5000px;'>
										<input name='b_36c4fd991d266f23781ded980_aefe40901a' tabindex='-1' value='' type='text'>
									</div>

									<!-- <div class='col-lg-4 col-md-4'>
												<button class='bb-btn btn'><span class='lnr lnr-arrow-right'></span></button>
											</div>  -->
								</div>
								<div class='info'></div>
							</form>
						</div>
					</div>
				</div>
				<div class='col-lg-2 col-md-6 col-sm-6'>
					<div class='single-footer-widget'>
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class='footer-social d-flex align-items-center'>
							<a href='#'><i class='fa fa-facebook'></i></a>
							<a href='#'><i class='fa fa-twitter'></i></a>
							<a href='#'><i class='fa fa-dribbble'></i></a>
							<a href='#'><i class='fa fa-behance'></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class='footer-bottom d-flex justify-content-center align-items-center flex-wrap'>
				<p class='footer-text m-0'> 
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