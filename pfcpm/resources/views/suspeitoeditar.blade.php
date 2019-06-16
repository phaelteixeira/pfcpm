@extends('inicial')

@section('body')
    <form action="{{route('suspeitos.update', $suspeito)}}" method="POST">
        @csrf
        @method('PUT')
        <h1>Editar registro do Suspeitos</h1>
        <div id="div_susp">
            <div class="nomesus">
                <label for="nomesus">Nome Completo:</label>
                <input class="form-control" name="nome" id="nomesus" size=30 value={{$suspeito->nome}}>
            </div>
            <div class="vulgosus">
                <label for="vulgosus">Vulgo:</label>
                <input class="form-control" name="vulgo" id="vulgosus" value={{$suspeito->vulgo}}> 
            </div>
            <div class="fotosus">
                <label for="fotosus">Foto:</label>
                <input type="file" name="foto" id="fotosus" value={{$suspeito->foto}}>
            </div>
            <div class="cpfsus">
                <label for="cpfsus">CPF:</label>
                <input class="form-control" name="cpf" id="cpfsus" value={{$suspeito->cpf}}>
            </div>
            <div class="rgsus">
                <label for="rgsus">RG:</label>
                <input class="form-control" name="rg" id="rgsus" value={{$suspeito->rg}}>
            </div>
            <div class="cidadesus">
                <label for="cidadesus">Cidade:</label>
                <input class="form-control" name="cidade" id="cidadesus" value={{$suspeito->cidade}}>
            </div>
            <div class="estadosus">
                <label for="estadosus">Estado:</label>
                <input class="form-control" name="estado" id="cidadesus" value={{$suspeito->estado}}>
            </div>
            <div class="crimesus">
                <label for="crimesus">Tipo de Crimes:</label>
                <input class="form-control" name="crime" id="crimesus" value={{$suspeito->tipo}}>
            </div>
            <div class="atu">
                <label for="localAtu">Local de Atuação:</label>
                <input class="form-control" name="localAtuacao" id="localAtu" value={{$suspeito->localAtuacao}}>
            </div>
            <div class="datanasc">
                <label for="crimesus">Data de Nascimento:</label>
                <input class="form-control" name="dataNascimento" id="datanasc" value={{$suspeito->dataNascimento}}>
            </div>
            <div class="sexo">
                <label for="sexosus">Sexo:</label><br>
                <select id="sex" name="sexo">
                    <option name="sexo">{{$suspeito->nome}}</option>
                    <option name="sexo">Masculino</option>
                    <option name="sexo">Feminino</option>
                </select>
            </div>
            <div class="pai">
                <label for="pai">Nome do Pai:</label>
                <input class="form-control" name="nomePai" id="pai" value={{$suspeito->pai}}>
            </div>
            <div class="mae">
                <label for="mae">Nome da Mãe:</label>
                <input class="form-control" name="nomeMae" id="mae" value={{$suspeito->mae}}>
            </div>
            
            <div class="btnsus" >
                <button  id="btnsus" class="btn btn-primary" >Editar</button>
            </div>
        </div>
    </form>
@endsection('body')