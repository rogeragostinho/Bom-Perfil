<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Bom Perfil</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
	<!-- google font 
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">-->
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}} ">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

	<link rel="stylesheet" href="{{asset('css/button.css')}}">
	<link rel="stylesheet" href="{{asset('css/logo.css')}}">
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo logotipo">
							<a href="{{route('site.index')}}">
								<img src="assets/img/LOGOTIPO FINAL (1).jpg" style="height: 60px; width: 120px;" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="{{route('site.index')}}">Home</a>
								</li>
								<li><a href="{{ route('site.sobre')}}">Sobre</a></li>
								<li><a href="{{route('site.index')}}#atividades">Actividades</a>
								</li>
								
								<li><a href="{{route('site.contato')}}">Contactos</a></li>
								<li><a href="#">Loja</a>
									<ul class="sub-menu">
										<li><a href="{{route('site.produtos_e_servicos')}}">Produtos e Serviços</a></li>
										<li><a href="{{route('site.checkout')}}">Concluir compra</a></li>
										
										<li><a href="{{route('site.carrinho')}}">Carrinho</a></li>
									</ul>
								</li>
								<li><a href="{{route('admin.index')}}">Admin</a>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="{{route('site.carrinho')}}"><i class="fas fa-shopping-cart"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Carregar <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->

	@yield('conteudo')

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Sobre nós</h2>
						<p>Bom Perfil é uma empresa diversificada atuando nos setores de comércio ,agropecuária,agricultura e estações de serviço</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Endereço</h2>
						<ul>
							<li>24/24 Luanda,Municipipo de Viana,distrito urbano<br>Estalagem.Fazenda Municipio do Icolo Bengo,Comuna do Cassoneca/Povoação da Mobaia<br>Estação de Serviço:Calemba2-Rua 11 de Novembro-Municipio do Talatona</li>
							<li>Geral@bomperfil.com</li>
							<li>950 600 000/ 931 62 0003</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pagina</h2>
						<ul>
							<li><a href="{{route('site.index')}}">Home</a></li>
							<li><a href="{{route('site.sobre')}}">Sobre</a></li>
							<li><a href="{{route('site.produtos_e_servicos')}}">Compras</a></li>
							<li><a href="{{route('site.index')}}#atividades">atividade</a></li>
							<li><a href="{{route('site.contato')}}">Contactos</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Subscreva</h2>
						<p>Inscreva-se em nossa lista de e-mails para receber as atualizações mais recentes.</p>
						<form>
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<p>Copyrights &copy; 2024 - <a href="https://imransdesign.com/">Santomé Technology</a>,  All Rights Reserved.<br>
					Distributed By - <a href="https://themewagon.com/">Santomé Technology</a>
				</p>
			</div>
			<div class="col-lg-6 text-right col-md-12">
				<div class="social-icons">
					<ul>
						<li><a href="https://www.facebook.com/profile.php?id=61560974381179" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="https://www.tiktok.com/@bomperfil" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
						<li><a href="https://www.facebook.com/Bom Perfil" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="https://www.youtube.com/@BomPerfil" target="_blank"><i class="fab fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end copyright -->
	
	</script>
	<!-- jquery -->
	<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>