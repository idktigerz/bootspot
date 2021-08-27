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

	<script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: -25.344, lng: 131.036 };
        // The map, centered at Uluru
        const mapBox = new google.maps.Map(document.getElementById("mapBox"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
          position: uluru,
          mapBox: mapBox,
        });
      }
    </script>


	<!--
            CSS
            ============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
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
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Comprar</a>
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
							<li class="nav-item active"><a class="nav-link" href="contact.php">Contactos</a></li>
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
					<h1>Contacte-nos!</h1>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
			<div>
				<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.4917429209577!2d-9.148089584260914!3d38.72947656442906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd193375f28860f1%3A0x1a34ece4d180bd39!2sR.%20Andrade%20Corvo%2C%20Lisboa!5e0!3m2!1spt-PT!2spt!4v1606666828304!5m2!1spt-PT!2spt" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>Lisboa, Portugal</h6>
							<p>Rua Andrade Corvo</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">912345678</a></h6>
							<p>Horários: dias úteis das 09:30 às 18:30</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">support@bootspot.com</a></h6>
							<p>Apoio 24h todos os dias</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

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

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->


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