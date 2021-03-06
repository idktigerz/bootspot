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
									<li class='nav-item submenu dropdown'><a href=' #' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'aria-expanded='false'>Ol??, <?php echo $_SESSION['username']; ?> !</a>

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
					<h1>Pol??tica de Privacidade</h1>
				</div>
			</div>
		</div>
	</section>
	<h2>Pol??tica Privacidade</h2>                    
    <p>A sua privacidade ?? importante para n??s. ?? pol??tica do BootSpot respeitar a sua privacidade em rela????o a qualquer informa????o sua que possamos coletar no site <a href=http://localhost/karma/index.php>BootSpot</a>, e outros sites que possu??mos e operamos.</p> 
    <p>Solicitamos informa????es pessoais apenas quando realmente precisamos delas para lhe fornecer um servi??o. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Tamb??m informamos por que estamos coletando e como ser?? usado.</p>
    <p>Apenas retemos as informa????es coletadas pelo tempo necess??rio para fornecer o servi??o solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceit??veis ??????para evitar perdas e roubos, bem como acesso, divulga????o, c??pia, uso ou modifica????o n??o autorizados.</p>                    
    <p>N??o compartilhamos informa????es de identifica????o pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>                    
    <p>O nosso site pode ter links para sites externos que n??o s??o operados por n??s. Esteja ciente de que n??o temos controle sobre o conte??do e pr??ticas desses sites e n??o podemos aceitar responsabilidade por suas respectivas pol??ticas de privacidade.</p>                    
    <p>Voc?? ?? livre para recusar a nossa solicita????o de informa????es pessoais, entendendo que talvez n??o possamos fornecer alguns dos servi??os desejados.</p>                    
    <p>O uso continuado de nosso site ser?? considerado como aceita????o de nossas pr??ticas em torno de privacidade e informa????es pessoais. Se voc?? tiver alguma d??vida sobre como lidamos com dados do usu??rio e informa????es pessoais, entre em contacto connosco.</p>                    
    <h2>Pol??tica de Cookies BootSpot</h2>                    
    <h3>O que s??o cookies?</h3>                    
    <p>Como ?? pr??tica comum em quase todos os sites profissionais, este site usa cookies, que s??o pequenos arquivos baixados no seu computador, para melhorar sua experi??ncia. Esta p??gina descreve quais informa????es eles coletam, como as usamos e por que ??s vezes precisamos armazenar esses cookies. Tamb??m compartilharemos como voc?? pode impedir que esses cookies sejam armazenados, no entanto, isso pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p>                    
    <h3>Como usamos os cookies?</h3>                    
    <p>Utilizamos cookies por v??rios motivos, detalhados abaixo. Infelizmente, na maioria dos casos, n??o existem op????es padr??o do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. ?? recomend??vel que voc?? deixe todos os cookies se n??o tiver certeza se precisa ou n??o deles, caso sejam usados ??????para fornecer um servi??o que voc?? usa.</p>                    
    <h3>Desativar cookies</h3>                    
    <p>Voc?? pode impedir a configura????o de cookies ajustando as configura????es do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativa????o de cookies afetar?? a funcionalidade deste e de muitos outros sites que voc?? visita. A desativa????o de cookies geralmente resultar?? na desativa????o de determinadas funcionalidades e recursos deste site. Portanto, ?? recomend??vel que voc?? n??o desative os cookies.</p>                    
    <h3>Cookies que definimos</h3>                    
    <ul>                        
        <li> Cookies relacionados ?? conta
            <br>
            <br> Se voc?? criar uma conta connosco, usaremos cookies para o gerenciamento do processo de inscri????o e administra????o geral. Esses cookies geralmente ser??o exclu??dos quando voc?? sair do sistema, por??m, em alguns casos, eles poder??o permanecer posteriormente para lembrar as prefer??ncias do seu site ao sair.
            <br>
            <br>                        
        </li>                        
        <li> Cookies relacionados ao login
            <br>
            <br> Utilizamos cookies quando voc?? est?? logado, para que possamos lembrar dessa a????o. Isso evita que voc?? precise fazer login sempre que visitar uma nova p??gina. Esses cookies s??o normalmente removidos ou limpos quando voc?? efetua logout para garantir que voc?? possa acessar apenas a recursos e ??reas restritas ao efetuar login.
            <br>
            <br>                        
        </li>                        
        <li> Cookies relacionados a boletins por e-mail
            <br>
            <br> Este site oferece servi??os de assinatura de boletim informativo ou e-mail e os cookies podem ser usados ??????para lembrar se voc?? j?? est?? registrado e se deve mostrar determinadas notifica????es v??lidas apenas para usu??rios inscritos / n??o inscritos.
            <br>
            <br>                        
        </li>                        
        <li> Pedidos processando cookies relacionados
            <br>
            <br> Este site oferece facilidades de com??rcio eletr??nico ou pagamento e alguns cookies s??o essenciais para garantir que seu pedido seja lembrado entre as p??ginas, para que possamos process??-lo adequadamente.
            <br>
            <br>                        
        </li>                        
        <li> Cookies relacionados a pesquisas
            <br>
            <br> Periodicamente, oferecemos pesquisas e question??rios para fornecer informa????es interessantes, ferramentas ??teis ou para entender nossa base de usu??rios com mais precis??o. Essas pesquisas podem usar cookies para lembrar quem j?? participou numa pesquisa ou para fornecer resultados precisos ap??s a altera????o das p??ginas.
            <br>
            <br>                        
        </li>                        
        <li> Cookies relacionados a formul??rios
            <br>
            <br> Quando voc?? envia dados por meio de um formul??rio como os encontrados nas p??ginas de contacto ou nos formul??rios de coment??rios, os cookies podem ser configurados para lembrar os detalhes do usu??rio para correspond??ncia futura.
            <br>
            <br>                        
        </li>                        
        <li> Cookies de prefer??ncias do site
            <br>
            <br> Para proporcionar uma ??tima experi??ncia neste site, fornecemos a funcionalidade para definir suas prefer??ncias de como esse site ?? executado quando voc?? o usa. Para lembrar suas prefer??ncias, precisamos definir cookies para que essas informa????es possam ser chamadas sempre que voc?? interagir com uma p??gina for afetada por suas prefer??ncias.
            <br>                       
         </li>                    
        </ul>                   
        <h3>Cookies de Terceiros</h3>                    
        <p>Em alguns casos especiais, tamb??m usamos cookies fornecidos por terceiros confi??veis. A se????o a seguir detalha quais cookies de terceiros voc?? pode encontrar atrav??s deste site.</p>                    
        <ul>                        
            <li> Este site usa o Google Analytics, que ?? uma das solu????es de an??lise mais difundidas e confi??veis ??????da Web, para nos ajudar a entender como voc?? usa o site e como podemos melhorar sua experi??ncia. Esses cookies podem rastrear itens como quanto tempo voc?? gasta no site e as p??ginas visitadas, para que possamos continuar produzindo conte??do atraente.                        
            </li>                    
        </ul>                    
        <p>Para mais informa????es sobre cookies do Google Analytics, consulte a p??gina oficial do Google Analytics.</p>                   
        <ul>                        
            <li> As an??lises de terceiros s??o usadas para rastrear e medir o uso deste site, para que possamos continuar produzindo conte??do atrativo. Esses cookies podem rastrear itens como o tempo que voc?? passa no site ou as p??ginas visitadas, o que nos ajuda a entender como podemos melhorar o site para voc??.</li>                        
            <li> Periodicamente, testamos novos recursos e fazemos altera????es subtis na maneira como o site se apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ??????para garantir que voc?? receba uma experi??ncia consistente enquanto estiver no site, enquanto entendemos quais otimiza????es os nossos usu??rios mais apreciam.</li>                        
            <li> ?? medida que vendemos produtos, ?? importante entendermos as estat??sticas sobre quantos visitantes de nosso site realmente compram e, portanto, esse ?? o tipo de dados que esses cookies rastrear??o. Isso ?? importante para voc??, pois significa que podemos fazer previs??es de neg??cios com precis??o que nos permitem analizar nossos custos de publicidade e produtos para garantir o melhor pre??o poss??vel.</li>                 
        </ul>                    
        <h3>Compromisso do Usu??rio</h3>     
        <p>O usu??rio se compromete a fazer uso adequado dos conte??dos e da informa????o que o BootSpot oferece no site e com car??ter enunciativo, mas n??o limitativo:</p>             
        <ul>                        
            <li>A) N??o se envolver em atividades que sejam ilegais ou contr??rias ?? boa f?? a ?? ordem p??blica;</li>                        
            <li>B) N??o difundir propaganda ou conte??do de natureza racista, xenof??bica, ou sobre cassinos, casas de apostas (ex.: Betway), jogos de sorte e azar, qualquer tipo de pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li>                        <li>C) N??o causar danos aos sistemas f??sicos (hardwares) e l??gicos (softwares) do BootSpot, de seus fornecedores ou terceiros, para introduzir ou disseminar v??rus inform??ticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>                    </ul>             <h3>Mais informa????es</h3>                    
            <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que voc?? n??o tem certeza se precisa ou n??o, geralmente ?? mais seguro deixar os cookies ativados, caso interaja com um dos recursos que voc?? usa em nosso site.</p>                    
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Sobre n??s</h6>
						<p>
							A BootSpot foi criada a 28 de setembro de 2020. Esta empresa tem um ??nico objetivo sendo ele dar aos utilizdaores uma assist??ncia na compra de umas chuteiras.
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
	<!--================End Login Box Area =================-->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Sobre n??s</h6>
						<p>
							A BootSpot foi criada a 28 de setembro de 2020. Esta empresa tem um ??nico objetivo sendo ele dar aos utilizdaores uma assist??ncia na compra de umas chuteiras.
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