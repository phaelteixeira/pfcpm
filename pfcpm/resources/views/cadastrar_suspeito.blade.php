@extends('inicial')

@section('body')
    <form action="{{route('suspeitos.store')}}" method="POST">
        @csrf
        <h1>Cadastro de Suspeitos</h1>
        <div id="div_susp">
            <div class="nomesus">
                <label for="nomesus">Nome Completo:</label>
                <input class="form-control" name="nome" id="nomesus" size=30>
            </div>
            <div class="vulgosus">
                <label for="vulgosus">Vulgo:</label>
                <input class="form-control" name="vulgo" id="vulgosus"> 
            </div>
            <div class="fotosus">
                <label for="fotosus">Foto:</label>
                <input type="file" name="foto" id="fotosus">
            </div>
            <div class="cpfsus">
                <label for="cpfsus">CPF:</label>
                <input class="form-control" name="cpf" id="cpfsus">
            </div>
            <div class="rgsus">
                <label for="rgsus">RG:</label>
                <input class="form-control" name="rg" id="rgsus">
            </div>
            <div class="cidadesus">
                <label for="cidadesus">Cidade:</label>
                <input class="form-control" name="cidade" id="cidadesus">
            </div>
            <div class="estadosus">
                <label for="estadosus">Estado:</label>
                <input class="form-control" name="estado" id="cidadesus">
            </div>
            <div class="crimesus">
                <label for="crimesus">Tipo de Crimes:</label>
                <input class="form-control" name="crime" id="crimesus">
            </div>
            <div class="atu">
                <label for="localAtu">Local de Atuação:</label>
                <input class="form-control" name="localAtuacao" id="localAtu">
            </div>
            <div class="datanasc">
                <label for="crimesus">Data de Nascimento:</label>
                <input class="form-control" name="dataNascimento" id="datanasc">
            </div>
            <div class="sexo">
                <label for="sexosus">Sexo:</label><br>
                <select id="sex" name="sexo">
                    <option name="sexo">-------</option>
                    <option name="sexo">Masculino</option>
                    <option name="sexo">Feminino</option>
                </select>
            </div>
            <div class="pai">
                <label for="pai">Nome do Pai:</label>
                <input class="form-control" name="nomePai" id="pai">
            </div>
            <div class="mae">
                <label for="mae">Nome da Mãe:</label>
                <input class="form-control" name="nomeMae" id="mae">
            </div>
            
            <div class="btnsus" >
                <button type="submit" id="btnsus" class="btn btn-primary" >Cadastrar</button>
            </div>
        </div>
    </form>
@endsection('body')