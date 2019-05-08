@extends('inicial')

@section('body')
<form>
        <div id="div_pol">
            <div class="nomepol">
                <label for="nomepol">Nome</label>
                <input class="form-control" name="nome" id="nomepol" size=30>
            </div>
            <div class="fotopol">
                <label for="fotopol">Foto</label>,
                <input type="file" name="foto" id="fotopol">
            </div>
            <div class="cpfpol">
                <label for="cpfpol">CPF</label>
                <input class="form-control" name="cpf" id="cpfpol">
            </div>
            <div class="rgpol">
                <label for="rgpol">RG</label>
                <input class="form-control" name="rg" id="rgpol">
            </div>
            <div class="cidadepol">
                <label for="cidadepol">Cidade</label>
                <input class="form-control" name="cidade" id="cidadepol">
            </div>
            <div class="estadopol">
                <label for="estadopol">Estado</label>
                <input class="form-control" name="estado" id="estadopol">
            </div>
            <div class="pelotaopol">
                <label for="pelotao">Pelotão</label>
                <input class="form-control" name="pelotao" id="pelotao">
            </div>
            <div class="btnpol" >
                <button type="submit" id="btnpol" class="btn btn-primary" >Cadastrar</button>
            </div>
        </div>
    </form>
@endsection('body')