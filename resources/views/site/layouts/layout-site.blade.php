<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Igreja Controle</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<link href="{{url('assets/home/css/animate.css')}}" rel="stylesheet">
		<link href="{{url('assets/home/css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('assets/home/css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{url('assets/home/css/skin-green.css')}}" rel="stylesheet">
		<link href="{{url('assets/home/css/style.css')}}" rel="stylesheet">

		<link rel="shortcut icon" href="{{url('assets/ico/favicon.png')}}">
	</head>

	<body data-spy="scroll" data-target=".navbar">
		<nav id="topnav" class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<!-- MOBILE -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#top-section">Igreja Controle</a>
				</div>
				<!-- Links do menu -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a class="sscroll" href="#top-section">Início</a></li>
						<li><a class="sscroll" href="#Section-1">Informações</a></li>
						<li><a class="sscroll" href="#Section-2">Perguntas Frequentes</a></li>
						<li><a class="sscroll" href="#Section-3">Entrar</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- CONTEÚDO -->
		@yield('content-site')

		<!-- FOOTER -->
		<footer id="foot-sec">
			<div class="footerdivide"></div>
			<div class="container ">
				<div class="row">
					<div class="text-center color-white col-sm-12 col-lg-12">
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
						</ul>
						<p>
							Empresa sem nome.com
						</p>
						<p>
							<a href="">Sem nome</a> | <a href="">Sem nome</a> | <a href="">Sem nome</a>
						</p>
					</div>
				</div>
			</div>
		</footer>

		<script src="{{url('assets/home/js/jquery.min.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/home/js/bootstrap.js')}}"></script>
		<script src="{{url('assets/home/js/jquery.parallax-1.1.3.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/home/js/jquery.localscroll-1.2.7-min.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/home/js/jquery.scrollTo-1.4.6-min.js')}}" type="text/javascript"></script>
		<script src="{{url('assets/home/js/jquery.bxslider.min.js')}}"></script>
		<script src="{{url('assets/home/js/jquery.placeholder.js')}}"></script>
		<script src="{{url('assets/home/js/modernizr.custom.js')}}"></script>
		<script src="{{url('assets/home/js/toucheffects.js')}}"></script>
		<script src="{{url('assets/home/js/animations.js')}}"></script>
		<script src="{{url('assets/home/js/init.js')}}"></script>
		

	</body>
</html>
