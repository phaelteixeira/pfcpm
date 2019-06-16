@extends('inicial')

@section('body')
    <form action="{{route('policiais.update', $policia)}}" method="post">
        <h1>Editar Registro do Policial</h1>
        @csrf
        @method('PUT')
        <div id="div_pol">
            <div class="nomepol">
                <label for="nomepol">Nome Completo:</label>
                <input class="form-control" name="nome" id="nomepol" size=30 value={{$policia->nome}}>
            </div>
            
            <div class="fotopol">
                <label for="fotopol">Foto:</label>
                <input type="file" name="foto" id="fotopol" value={{$policia->foto}}>
            </div>

            <div class="mat">
                <label for="num_mat">Número de matrícula:</label>
                <input class="form-control" name="num_mat" id="num_mat" size=30 value={{$policia->num_mat}}>
            </div>

            <div class="sexopol">
                <label for="sexo">Sexo:</label><br>
                <select id="sex" name="sexo">
                    <option name="sexo">{{$policia->nome}}</option>
                    <option name="sexo">Masculino</option>
                    <option name="sexo">Feminino</option>
                </select>
            </div>

            <div class="cpfpol">
                <label for="cpfpol">CPF:</label>
                <input class="form-control" name="cpf" id="cpfpol" value={{$policia->cpf}}>
            </div>
            <div class="rgpol">
                <label for="rgpol">RG:</label>
                <input class="form-control" name="rg" id="rgpol" value={{$policia->rg}}>
            </div>
            <div class="cidadepol">
                <label for="cidadepol">Cidade</label>
                <input class="form-control" name="cidade" id="cidadepol" value={{$policia->cidade}}>
            </div>
            <div class="estadopol">
                <label for="estadopol">Estado:</label>
                <input class="form-control" name="estado" id="estadopol" value={{$policia->estado}}>
            </div>
            <div class="pelotaopol">
                <label for="pelotao">Unidade:</label>
                <input class="form-control" name="pelotao" id="pelotao" value={{$policia->pelotao}}>
            </div>

            <div class="sen">
                <label for="senhap">Senha:</label>
                <input class="form-control" name="senha" id="senhap">
            </div>

            <div class="btnpol" >
                <button  id="btnpol" class="btn btn-primary" >editar</button>
            </div>
            
        </div>
    </form>
@endsection('body')