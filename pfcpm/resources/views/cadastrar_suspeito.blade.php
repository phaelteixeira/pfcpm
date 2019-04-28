@extends('inicial')

@section('body')
    <form>
        <div id="div_susp">
            <div>
                <label for="nome">Nome</label>
                <input class="form-control" name="nome" id="nome" size=30>
            </div>
            <div>
                <label for="vulgo">Vulgo</label>
                <input class="form-control" name="vulgo" id="vulgo"> 
            </div>
            <div>
                <label for="foto">Foto</label>,
                <input type="file" name="foto" id="foto">
            </div>
            <div>
                <label for="cpf">CPF</label>
                <input class="form-control" name="cpf" id="cpf">
            </div>
            <div>
                <label for="rg">RG</label>
                <input class="form-control" name="rg" id="rg">
            </div>
            <div>
                <label for="cidade">Cidade</label>
                <input class="form-control" name="cidade" id="cidade">
            </div>
            <div>
                <label for="estado">Estado</label>
                <input class="form-control" name="estado" id="cidade">
            </div>
            <div>
                <label for="crime">Tipo de Crimes</label>
                <input class="form-control" name="crime" id="crime">
            </div>
        </div>
    </form>
@endsection('body')