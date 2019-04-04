@extends('site.layouts.layout-site')

@section('content-site')

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