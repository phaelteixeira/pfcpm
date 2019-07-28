<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Cadastro</title>
</head>
<body>
<form action="{{route('create')}}" method="post" enctype="multipart/form-data">
        <h1>Cadastro Policial</h1>
        @csrf
        <div id="div_pol">
            <div class="nomepol {{$errors->has('nome') ? 'has-error' : '' }}">
                <label for="nomepol">Nome Completo:</label>
                <input class="form-control" name="nome" value="{{old('nome')}}" id="nomepol" size=30>
                @if($errors->has('nome'))
                    <span class="help->block">
                        {{$errors->first('nome')}}
                    </span>
                @endif
            </div>

            <div class="fotopol {{ $errors->has('foto') ? 'has->error' : '' }} ">
                <label for="fotopol">Foto:</label><br>
                <input type="file" name="foto" id="fotopol" value="{{ old('foto') }}">
                @if($errors->has('foto'))
                    <span class="help-block">
                        {{ $errors->first('foto') }}
                    </span>
                @endif
            </div>

            <div class="patenteTela col-sm-1 {{ $errors->has('patente') ? 'has-error' : '' }}">
                <label for="pelotao">Patente:</label>
                <input type="text" class="form-control" name="patente" value="{{ old('patente') }}" id="patente">
                @if($errors->has('patente'))
                    <span class="help-block">
                        {{ $errors->first('patente') }}
                    </span>
                @endif
            </div>

            <div class="mat col-sm-2 {{ $errors->has('matricula') ? 'has-error' : '' }}">
                <label for="matricula">Número de matrícula:</label>
                <input class="form-control" name="matricula" value="{{ old('matricula') }}" id="matricula" size=30>
                @if($errors->has('matricula'))
                    <span class="help-block">
                        {{ $errors->first('matricula') }}
                    </span>
                @endif
            </div>

            <div class="sexopol {{ $errors->has('sexo') ? 'has-error' : '' }} ">
                <label for="sexo">Sexo:</label><br>
                <select id="sex" name="sexo">
                    <option >-------</option>
                    <option name="sexo">Masculino</option>
                    <option name="sexo">Feminino</option>
                </select>
                @if($errors->has('sexo'))
                    <span class="help-block">
                        {{ $errors->first('sexo') }}
                    </span>
                @endif
            </div>

            <div class="cpfpol col-sm-2 {{ $errors->has('cpf') ? 'has-error' : '' }} ">
                <label for="cpfpol">CPF:</label>
                <input class="form-control" name="cpf" id="cpfpol" value="{{ old('cpf') }}" >
                @if($errors->has('cpf'))
                    <span class="help-block">
                        {{ $errors->first('cpf') }}
                    </span>
                @endif
            </div>
            <div class="rgpol col-sm-2 {{ $errors->has('rg') ? 'has->error' : '' }} ">
                <label for="rgpol">RG:</label>
                <input class="form-control" name="rg" id="rgpol" value="{{ old('rg') }}" >
                @if($errors->has('rg'))
                    <span class="help-block">
                        {{ $errors->first('rg') }}
                    </span>
                @endif
            </div>
            <div class="estadopol {{ $errors->has('estado') ? 'has-error' : '' }} " >
                <label for="estadopol">Estado:</label>
                <input class="form-control" name="estado" id="estadopol" value="{{ old('estado') }}" >
                @if($errors->has('estado'))
                    <span class="help-block" >
                        {{ $errors->first('estado') }}
                    </span>
                @endif
            </div>
            <div class="cidadepol {{ $errors->has('cidade') ? 'has-error' : '' }} ">
                <label for="cidadepol">Cidade</label>
                <input class="form-control" name="cidade" id="cidadepol" value="{{ old('cidade') }}" >
                @if($errors->has('cidade'))
                    <span class="help-block" >
                        {{ $errors->first('cidade') }}
                    </span>
                @endif
            </div>

            <div class="datanascP {{ $errors->has('dataNascimento') ? 'has-error' : '' }} ">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" name="dataNascimento" value="{{ old('dataNascimento') }}" id="dataNascimento">
                @if($errors->has('dataNascimento'))
                    <span class="help-block" >
                        {{ $errors->first('dataNascimento') }}
                    </span>
                @endif
            </div>

            <div class="pelotaopol {{ $errors->has('pelotao') ? 'has-error' : '' }} ">
                <label for="pelotao">Unidade:</label>
                <input class="form-control" name="pelotao" id="pelotao" value="{{ old('pelotao') }}" >
                @if($errors->has('pelotao'))
                    <span class="help-block" >
                        {{ $errors->first('pelotao') }}
                    </span>
                @endif
            </div>

            <div class="sen {{ $errors->has('senha') ? 'has-error' : '' }} ">
                <label for="senhap">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senhap">
                @if($errors->has('senha'))
                    <span class="help-block" >
                        {{ $errors->first('senha') }}
                    </span>
                @endif
            </div>

            <div class="confirmarsen {{ $errors->has('senha') ? 'has-error' : '' }} " >
                <label for="senha">Confirmar Senha:</label>
                <input type="password" class="form-control" name="senha" id="senhap">
                @if($errors->has('senha'))
                    <span class="help-block" >
                        {{ $errors->first('senha') }}
                    </span>
                @endif
            </div>

            <div class="btnpol" >
                <button type="submit" id="btnpol" class="btn btn-primary" >Cadastrar</button>
            </div>
            
        </div>
    </form>
</body>
</html>