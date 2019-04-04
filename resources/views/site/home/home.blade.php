@extends('site.layouts.layout-site')

@section('content-site')

<!-- HOMEPAGE -->
<header id="top-section" class="fullbg">
	<div class="jumbotron">
		<div id="carousel_intro" class="carousel slide fadeing">
			<div class="carousel-inner">
				<div class="active item" id="slide_1">
					<div class="carousel-content">					
						<div class="animated fadeInDownBig">
							 <h1>Sistema de gestão de igrejas</h1>
						</div>
						<br/>
						<!--<a href="#" class="buttonyellow animated fadeInLeftBig"><i class="fa fa-shopping-cart"></i>&nbsp; Get Theme</a>
						<a href="#" class="buttoncolor animated fadeInRightBig"><i class="fa fa-link"></i>&nbsp; Start Tour</a>-->
					</div>
				</div>
				<div class="item" id="slide_2">
					<div class="carousel-content">					
						<div class="animated fadeInDownBig">
						 	<h1>Todo as informações de sua igreja na palma das suas mãos</h1>
						</div>
						<br/>
						<a class="buttoncolor animated fadeInRightBig sscroll" href="#Section-3">Entrar</a>
					</div>
				</div>
				<div class="item" id="slide_3">
					<div class="carousel-content">					
						<div class="animated fadeInDownBig">
						 	<h1>Peça uma informação.</h1>					
						</div>
						<br/>
						<!--<a href="#" class="buttonyellow animated fadeInLeftBig"><i class="fa fa-download"></i>&nbsp; Download Now</a>-->
					</div>
				</div>
			</div>
		</div>
		<button class="left carousel-control" href="#carousel_intro" data-slide="prev" data-start="opacity: 0.6; left: 0%;" data-250="opacity:0; left: 5%;"><i class="fa fa-chevron-left"></i></button>
		<button class="right carousel-control" href="#carousel_intro" data-slide="next" data-start="opacity: 0.6; right: 0%;" data-250="opacity:0; right: 5%;"><i class="fa fa-chevron-right"></i></button>
	</div>
	<div class="inner-top-bg"></div>
</header>
<!-- / HOMEPAGE -->
<!--  SECTION-1 -->
<section id="Section-1" class="fullbg">
	<div class="section-divider"></div>
	<div class="container">
		<div class="row">
			<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
				<h1>Serviços</h1>
				<p class="lead">
				</p>
			</div>
		</div>
		<div class="row color-white">
			<div class="col-md-12">
				<div class="boxservice">
					<i class="fa fa-users"></i>
					<h4>Controle de membros</h4>
					<p>
            			Cadastre ou simplesmente envie o link para os próprios membros preencherem seus dados, tornando todo o controle mais fácil.
					</p>
				</div>
				<div class="boxservice">
					<i class="fa fa-gift"></i>
					<h4>Aniversariantes do mês</h4>
					<p>
            			Não perca nenhuma data especial! Agora você saberá quais membros estão comemorando mais um ano de vida!
					</p>
				</div>
				<div class="boxservice rightb">
					<i class="fa fa-calendar"></i>
					<h4>Carteirinhas</h4>
					<p>
            			Você poderá passar uma imagem de organização para seus membros.
					</p>
				</div>
				<div class="boxservice bottomb">
					<i class="fa fa-calendar"></i>
					<h4>Agenda de eventos</h4>
					<p>
            			Saiba quando, onde e em qual horário serão os próximos compromissos!.
					</p>
				</div>
				<div class="boxservice bottomb">
					<i class="fa fa-sign-in"></i>
					<h4>Inscrição de eventos</h4>
					<p>
						Abandone o papel e caneta! com apenas um link todos os participantes poderão realizar suas inscrições nos retiros e caravanas!
					</p>
				</div>
				<div class="boxservice rightb bottomb">
					<i class="fa fa-usd"></i>
					<h4>Controle de caixa</h4>
					<p>
            			Organize as finanças de sua igreja mais facilmente. Deixe que a gente te mostre o quanto está saindo e entrando em cada mês! 
					</p>
				</div>
		</div>
	</div>
</section>

<!-- SECTION-2(Perguntas Frequentes) -->
<section id="Section-2" class="fullbg color-white">
	<div class="section-divider"></div>
	<div class="container">
		<div class="row">
			<div class="page-header text-center col-sm-12 col-lg-12 animated fade">
				<h1>Perguntas Frequentes</h1>
				<p class="lead">
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<div class="arrow"></div>
				<div class="testimonials-slider">
					<div class="slide">
						<div class="testimonials-carousel-thumbnail">
							<img width="120" alt="" src="{{url('assets/home/img/user-guilherme.jpg')}}">
						</div>
						<div class="testimonials-carousel-context">
							<div class="testimonials-name">
						 		O que é o e-sic?<span></span>
							</div>
							<div class="testimonials-carousel-content">
								<p>
                        			O Sistema Eletrônico de Serviço de Informação ao Cidadão (e-SIC) é um sistema que centraliza as entradas e saídas de todos os pedidos de acesso dirigidos ao Poder Executivo Municipal, tendo como objetivo organizar e facilitar os procedimentos de acesso à informação tanto para o cidadão, quanto para a Administração Pública.
								</p>
								<p>
									O e-SIC permite que qualquer pessoa – física ou jurídica – encaminhe pedidos de acesso à informação para órgãos e entidades do Poder Executivo Municipal. Por meio do sistema tampem é possível consultar as respostas recebidas, entrar com recursos, apresentar reclamações, entre outras ações.
                        		</p>
                        		<p>
                        			O art. 9º. Da Lei de Acesso instituiu como um dever do Estado a criação de um ponto de contato entre a Sociedade e o Setor Público, que é o Serviço de Informações ao Cidadão – SIC.
                        		</p>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="testimonials-carousel-thumbnail">
							<img width="120" alt="" src="{{url('assets/home/img/user-guilherme.jpg')}}">
						</div>
						<div class="testimonials-carousel-context">
							<div class="testimonials-name">
                    			O que é a busca de perguntas e respostas? <span></span>
							</div>
							<div class="testimonials-carousel-content">
								<p>
                        			Trata-se de um sistema que permite a qualquer pessoa consultar os pedidos de informação, feitos com base na Lei de Acesso à Informação, direcionados aos órgãos e às entidades do Poder Executivo Federal e suas respectivas respostas.
								</p>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="testimonials-carousel-thumbnail">
							<img width="120" alt="" src="{{url('assets/home/img/user-guilherme.jpg')}}">
						</div>
						<div class="testimonials-carousel-context">
							<div class="testimonials-name">
                    			É preciso dar razões para o pedido? <span></span>
							</div>
							<div class="testimonials-carousel-content">
								<p>
                        			Não é preciso apresentar nenhum tipo de justificativa para a solicitação de informações.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION-3(Login) -->
<section id="Section-3" class="fullbg">
	<div class="section-divider"></div>
		<div class="container">
			<div class="row">
				<div class="page-header text-center col-sm-12 col-lg-12 color-white">
					<h2>Faça o login</h2>
					<p class="lead">
                        Preencha os campos abaixo e clique em entrar para realizar o login.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">
					<div class="messages">
					    @include('includes.alerts')
					</div>
					<form method="POST" action="{{ route('login.post') }}">
                    @csrf
						<input name="email" style="background-color: white;" type="email" id="email" class="col-lg-12 " placeholder="Digite seu email" required autofocus>
						<input name="password" style="background-color: white;"  type="password" id="password" class="col-lg-12 " placeholder="Digite uma senha" required>
                        <input type="submit" class="buttoncolor col-lg-12" style="float:right;" value="Entrar"/>
					</form>
				</div>
			</div>
		</div>
</section>
@endsection
