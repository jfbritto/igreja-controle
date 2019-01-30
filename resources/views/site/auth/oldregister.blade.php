@extends('site.layouts.app')

@section('content-site')

<div class="content">
    <div class="container">
        
        <div class="card">
            <div class="card-header">Registro</div>

            <form method="POST" action="{{ route('cidadao.registrar.post') }}">
            @csrf
            <div class="card-body">

                <div class="row">
                    
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input id="password" type="password" class="form-control" name="senha" required>
                        </div>

                    </div>

                </div>
                <div class="row">

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input id="cpf" type="text" class="form-control" name="cpf" value="{{ old('cpf') }}" required>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input id="telefone" type="text" class="form-control" name="telefone" value="{{ old('telefone') }}" required>
                        </div>

                    </div>
                
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="sexo">Sexo</label>                                    
                            <select id="sexo" class="form-control" name="sexo" required>
                                <option>Selecione</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="data_nascimento">Data Nascimento</label>
                            <input id="data_nascimento" type="date" class="form-control" name="data_nascimento" value="{{ old('data_nascimento') }}" required>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <br>

        <div class="card">
            <div class="card-header">Endereço</div>

            <div class="card-body">


                <div class="row">
                        
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="estado_id">Estado</label>                                    
                            <select id="estado_id" class="form-control" name="estado_id" required>
                                <option>Selecione</option>
                                <option value="2">ES</option>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="cidade_id">Cidade</label>                                    
                            <select id="cidade_id" class="form-control" name="cidade_id" required>
                                <option>Selecione</option>
                                <option value="123">IBATIBA</option>
                            </select>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-4">

                        <div class="form-group">
                            <label for="cep">Cep</label>
                            <input id="cep" type="text" class="form-control" name="cep" value="{{ old('cep') }}" required>
                        </div>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="rua">rua</label>
                            <input id="rua" type="text" class="form-control" name="rua" value="{{ old('rua') }}" required>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input id="bairro" type="text" class="form-control" name="bairro" value="{{ old('bairro') }}" required>
                        </div>

                    </div>
                
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="numero">Número</label>
                            <input id="numero" type="text" class="form-control" name="numero" value="{{ old('numero') }}" required>
                        </div>

                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label for="complemento">Complemento</label>
                            <input id="complemento" type="text" class="form-control" name="complemento" value="{{ old('complemento') }}" required>
                        </div>

                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button style="float: right;" type="submit" class="btn btn-primary">
                                Registrar
                            </button>
                        </div>
                    </div>
                </div>

            </div>    
        </div> 
        </form>       
    </div>
</div>
@endsection

