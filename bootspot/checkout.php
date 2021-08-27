<?php
    session_start();
    require("db_connection.php");
    if(!isset($_SESSION["username"])) {
        header("Location: login.php");
        exit();
    }
	
		 
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
                    <h1>Checkout</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="single-product.php">Checkout</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Checkout Area =================-->
    <?php 
    if(isset($_GET['idProduto']) && isset($_GET['username'])){
        $idModelos=$_GET['idProduto'];
        $username=$_GET['username'];
        $sql = "SELECT modelos.nome as nome, modelos.tipoSola as tipoSola, modelos.id as idModelos, marcas.nomes as marcas_nome, produtos.preco as preco, produtos.stock as stock, modelos_foto.image as foto, utilizadores.nome_completo as nome_completo, utilizadores.morada as morada, utilizadores.nrTelemovel as nrTelemovel, utilizadores.id as idUtilizadores, utilizadores.username as username FROM modelos 
        INNER JOIN marcas INNER JOIN produtos INNER JOIN modelos_foto INNER JOIN utilizadores
        WHERE modelos.idMarcas = marcas.id AND modelos.id = produtos.idModelos AND modelos.id = modelos_foto.idModelos AND modelos.id='$idModelos' AND utilizadores.username='$username' LIMIT 1";
        }else{
            echo "Carrinho vazio";
        }
       
        $result = $con->query($sql);
        $con->close();

        while($row = $result->fetch_assoc()){
        ?>
    <section class="checkout_area section_gap">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Informações de envio</h3>
                        <form class="row contact_form" action="checkout.php" method="post" novalidate="novalidate">
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="first" name="nome_completo" placeholder="Nome completo" required/>
                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" class="form-control" id="number" name="nrTelemovel" placeholder="Número de telemovel" required/>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value="1">Portugal</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="add1" name="morada" placeholder="Endereço" required/>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" required/>
                            </div>
                            <div class="col-md-12 form-group p_star">
                                <select class="country_select">
                                    <option value = "0">Escolha um distrito...</option>
                                    <option value="1">Aveiro</option>
                                    <option value="2">Beja</option>
                                    <option value="3">Braga</option>
                                    <option value="4">Bragança</option>
                                    <option value="5">Castelo Branco</option>
                                    <option value="6">Coimbra</option>
                                    <option value="7">Évora</option>
                                    <option value="8">Faro</option>
                                    <option value="9">Guarda</option>
                                    <option value="10">Leiria</option>
                                    <option value="11">Lisboa</option>
                                    <option value="12">Portalegre</option>
                                    <option value="13">Porto</option>
                                    <option value="14">Santarém</option>
                                    <option value="15">Setúbal</option>
                                    <option value="16">Viana do Castelo</option>
                                    <option value="17">Vila Real</option>
                                    <option value="18">Viseu</option>
                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="Código Postal" required/>
                            </div>
                            <div class="row">
                                    <h3 class="text-center">Informações de pagamento</h3>
                            <div class="col-md-12 form-group">
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <div class="col-md-12 form-group">
                                                <label>Número de cartão</label>
                                                <div class="input-group">
                                                    <input type="tel" class="form-control" placeholder="Valid Card Number" required />
                                                    <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <div class="col-md-12 form-group">
                                                <label><span class="hidden-xs">Data de validade</span><span class="visible-xs-inline"></span></label>
                                                <input type="tel" class="form-control" placeholder="MM / YY"  required />
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <div class="col-md-12 form-group">
                                                <label>Número de verificação de cartão</label>
                                                <input type="tel" class="form-control" placeholder="CVC" required />
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>A sua encomenda</h2>
                            <ul class="list">
                                <li><a href="#"> <span>Total</span></a></li>
                                <li><a href="#"> Seus Produtos<span class="middle"></span><span class="last"></span></a></li>
                                <li><a href="#"><?php echo $row['marcas_nome'] ?> <?php echo $row['nome']; ?><span class="middle"></span><span class="last"><?php echo $row['preco'] ?>€</span></a></li>
                                <li><a href="#"> <span class="middle"></span><span class="last"></span></a></li>
                                <li><a href="#"> <span class="middle"></span> <span class="last"></span></a></li>
                            </ul>
                            <ul class="list list_2">
                                <li><a href="#">Subtotal <span><?php echo $row['preco'] ?>€</span></a></li>
                                <li><a href="#">Portes de envios <span>Grátis</span></a></li>
                                <li><a href="#">Total <span><?php echo $row['preco'] ?>€</span></a></li>
                            </ul>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector" required />
                                <label for="f-option4">Li e aceito os </label>
                                <a href="privacidade">termos & condições*</a>
                            </div>
                            <a class="primary-btn" type = "submit" href="confirmation.php?idProduto=<?php echo $row['idModelos'] ?>&username=<?php echo $row['username'] ?>">Comprar agora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    }
    ?>
    <!--================End Checkout Area =================-->

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
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
</body>

</html>