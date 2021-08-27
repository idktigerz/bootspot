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
	<title>BootSpot
	</title>
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
							<li class="nav-item submenu dropdown active">
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
									<li class='nav-item'><a class='nav-link' href='painel_cliente.php'>A minha conta</a></li> <li class='nav-item'><a class='nav-link' href='logout.php'>Sair/Logout</a></li>
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
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Single Product Area =================-->
	
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
					<?php 
						require("db_connection.php");
						$id=$_GET['id'];
						$query = "SELECT modelos.id as id, modelos_foto.image as foto
						FROM modelos INNER JOIN modelos_foto 
						WHERE modelos.id = modelos_foto.idModelos AND modelos.id='$id'";
						$result1 = $con->query($query);
						while($row = $result1->fetch_assoc()) {
					?>
						<div class="single-prd-item">
							<img class="img-fluid" src="<?php echo $row['foto'];?>" alt="Foto não disponível">
						</div>
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<?php
						require("db_connection.php");
						if(isset($_GET['id'])){
						$id=$_GET['id'];
						$sql = "SELECT modelos.nome, modelos.tipoSola, modelos.id as id, marcas.nomes as marcas_nome, produtos.preco as preco, produtos.stock as stock
						FROM modelos INNER JOIN marcas INNER JOIN produtos 
						WHERE modelos.idMarcas = marcas.id AND modelos.id = produtos.idModelos AND modelos.id='$id' LIMIT 1";
						
						}else{
							echo "erro";
						}
						$result = $con->query($sql);
						while($row = $result->fetch_assoc()) { 
					?>
					<div class="s_product_text">
						
						<h6><?php echo $row['marcas_nome']." ". $row['nome']. " " .$row['tipoSola']; ?></h6>
						<h2><?php echo $row['preco']; ?>€</h2>
						
						<ul class="list">
							<li><a class="active" href="#"></a></li>
							<li><span>Quantidade</span> : <?php echo $row['stock']; ?></li>
							<div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value = "0">Escolha um Tamanho...</option>
                                    <option value="1">39</option>
                                    <option value="2">39 1/3</option>
                                    <option value="3">39 2/3</option>
                                    <option value="4">40</option>
                                    <option value="5">40 1/3</option>
                                    <option value="6">40 2/3</option>
                                    <option value="7">41</option>
                                    <option value="8">41 1/3</option>
                                    <option value="9">41 2/3</option>
                                    <option value="10">42</option>
                                    <option value="11">42 1/3</option>
                                    <option value="12">42 2/3</option>
                                    <option value="13">43</option>
                                    <option value="14">43 1/3</option>
                                    <option value="15">43 2/3</option>
                                    <option value="16">44</option>
                                    <option value="17">44 1/3</option>
                                    <option value="18">44 2/3</option>
									<option value="19">45</option>
                                    <option value="20">45 1/3</option>
                                    <option value="21">45 2/3</option>
                                </select>
                            </div>
						</ul>
						<p></p>
						<div class="product_count">
							<label for="qty">Quantity:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class='primary-btn' href='cart.php?id=<?php echo $row['id'];?>'>Add to Cart</a>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<?php
		require("db_connection.php");
		if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql = "SELECT modelos.id as id, produtos.descricao as descricao
		FROM modelos INNER JOIN produtos 
		WHERE modelos.id = produtos.idModelos AND modelos.id='$id' LIMIT 1";
		
		}else{
			echo "erro";
		}
		$result = $con->query($sql);
		while($row = $result->fetch_assoc()) { 
	?>
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p><?php echo $row['descricao'];?></p>
					
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php } ?>
	
	<!--================End Product Description Area =================-->

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
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>