@extends('site.layouts.layout-site')

@section('content-site')

<section id="Section-3" class="fullbg">
	<div class="section-divider"></div>
		<div class="container">
			<div class="row">
				<div class="page-header text-center col-sm-12 col-lg-12 color-white">
					<h2>Cadastre-se</h2>
					<p class="lead">
                        Preencha todos os campos abaixo e clique em cadastrar para efetivar seu cadastro.
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">
					<form method="POST" action="/cidadao/registrar">
					@csrf
						<input name="nome" style="background-color: white;" size="30" type="text" id="name" class="col-lg-12 " placeholder="Digite seu nome" required autofocus>
						<input name="email" style="background-color: white;" size="30" type="email" id="email" class="col-lg-12 " placeholder="Digite seu email" required>
						<input name="password" style="background-color: white;" size="30" type="password" id="password" class="col-lg-12 " placeholder="Digite uma senha" required>
						<input name="cpf" style="background-color: white;" size="30" type="text" id="cpfcnpj" class="col-lg-12" placeholder="Digite seu CPF" required>
						<input name="telefone" style="background-color: white;" size="30" type="text" id="telefone" class="col-lg-12" placeholder="Telefone/Celular" required>
						<select name="sexo" class="col-lg-12" style="background-color: white; height: 46.8px;"required>
							<option>Selecione o sexo</option>
							<option value="Masculino">Masculino</option>
							<option value="Feminino">Feminino</option>
							<option value="Outro">Outro</option>
						</select>
						<input class="col-lg-12"  name="data_nascimento" style="background-color: white; height: 46.8px;" type="date" id="data_nascimento" class="col-lg-6 " required>
				</div>
			</div>
			<div class="row">
				<div class="page-header text-center col-sm-12 col-lg-12 color-white animated fade">
					<p class="lead">
			 			Endereço
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">
						<input name="cep" style="background-color: white;" size="30" type="text" id="cep" class="col-lg-12 " placeholder="CEP"required>
						<select name="estado_id" class="col-lg-12" style="background-color: white; height: 46.8px;" id="estado" required>
							<option>Selecione o estado</option>
							<option value="2">ES</option>
						</select>
						<select name="municipio_id" class="col-lg-12" style="background-color: white; height: 46.8px;" id="cidade" required>
							<option>Selecione a cidade</option>
							<option value="1">Ibatiba</option>
						</select>
						<input name="bairro" style="background-color: white;" size="30" type="text" id="bairro" class="col-lg-12 " placeholder="Bairro" required>
						<input name="rua" style="background-color: white;" size="30" type="text" id="rua" class="col-lg-12 " placeholder="Rua" required>
						<input name="numero" style="background-color: white;" size="30" type="text" id="numero" class="col-lg-12 " placeholder="Número" required>
						<input name="complemento" style="background-color: white;" size="30" type="text" id="complemento" class="col-lg-12 " placeholder="Complemento" required>
						<input type="submit" class="buttoncolor col-lg-12" style="float:right;" value="Cadastrar"/>
					</form>
				</div>
			</div>
		</div>
</section>

<script src="{{url('assets/home/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('assets/home/js/jquery.inputmask.bundle.js')}}"></script>

<script>
	$("input[id*='cpfcnpj']").inputmask({
  		mask: ['999.999.999-99', '99.999.999/9999-99'],
  		keepStatic: true
	});
	$("input[id*='telefone']").inputmask({
  		mask: ['(99)9999-9999', '(99)99999-9999'],
  		keepStatic: true
	});
	$("input[id*='cep']").inputmask({
  		mask: ['99.999-999'],
  		keepStatic: true
	});
</script>
@endsection