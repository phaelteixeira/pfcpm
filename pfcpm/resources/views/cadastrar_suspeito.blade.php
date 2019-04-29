@extends('inicial')

@section('body')
    <form>
        <div id="div_susp">
            <div class="nomesus">
                <label for="nomesus">Nome</label>
                <input class="form-control" name="nome" id="nomesus" size=30>
            </div>
            <div class="vulgosus">
                <label for="vulgosus">Vulgo</label>
                <input class="form-control" name="vulgo" id="vulgosus"> 
            </div>
            <div class="fotosus">
                <label for="fotosus">Foto</label>,
                <input type="file" name="foto" id="fotosus">
            </div>
            <div class="cpfsus">
                <label for="cpfsus">CPF</label>
                <input class="form-control" name="cpf" id="cpfsus">
            </div>
            <div class="rgsus">
                <label for="rgsus">RG</label>
                <input class="form-control" name="rg" id="rgsus">
            </div>
            <div class="cidadesus">
                <label for="cidadesus">Cidade</label>
                <input class="form-control" name="cidade" id="cidadesus">
            </div>
            <div class="estadosus">
                <label for="estadosus">Estado</label>
                <input class="form-control" name="estado" id="cidadesus">
            </div>
            <div class="crimesus">
                <label for="crimesus">Tipo de Crimes</label>
                <input class="form-control" name="crime" id="crimesus">
            </div>
            <div class="btnsus" >
                <button type="submit" id="btnsus" class="btn btn-primary" >Cadastrar</button>
            </div>
        </div>
    </form>
@endsection('body')