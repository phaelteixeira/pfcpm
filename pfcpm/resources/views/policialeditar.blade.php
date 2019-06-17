@extends('inicial')

@section('body')
    <form action="{{route('policial.update', $policial)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h1>Editar Registro do Policial</h1>
        <div id="div_pol">
            <div class="nomepol">
                <label for="nomepol">Nome Completo:</label>
                <input class="form-control" name="nome" id="nomepol" size=30 value="{{$policial->nome}}">
            </div>
            
            <div class="fotopol">
                <label for="fotopol">Foto:</label>
                <input type="file" name="foto" id="fotopol" value={{$policial->foto}}>
            </div>

            <div class="mat">
                <label for="num_mat">Número de matrícula:</label>
                <input class="form-control" name="num_mat" id="num_mat" size=30 value={{$policial->num_mat}}>
            </div>

            <div class="sexopol">
                <label for="sexo">Sexo:</label><br>
                <select id="sex" name="sexo">
                    <option name="sexo">{{$policial->sexo}}</option>
                    <option name="sexo">Masculino</option>
                    <option name="sexo">Feminino</option>
                </select>
            </div>

            <div class="cpfpol">
                <label for="cpfpol">CPF:</label>
                <input class="form-control" name="cpf" id="cpfpol" value={{$policial->cpf}}>
            </div>
            <div class="rgpol">
                <label for="rgpol">RG:</label>
                <input class="form-control" name="rg" id="rgpol" value={{$policial->rg}}>
            </div>
            <div class="cidadepol">
                <label for="cidadepol">Cidade</label>
                <input class="form-control" name="cidade" id="cidadepol" value={{$policial->cidade}}>
            </div>
            <div class="estadopol">
                <label for="estadopol">Estado:</label>
                <input class="form-control" name="estado" id="estadopol" value={{$policial->estado}}>
            </div>
            <div class="pelotaopol">
                <label for="pelotao">Unidade:</label>
                <input class="form-control" name="pelotao" id="pelotao" value={{$policial->pelotao}}>
            </div>

            <div class="sen">
                <label for="senhap">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senhap">
            </div>

            <div class="btnpol" >
                <button  id="btnpol" class="btn btn-primary" >Editar</button>
            </div>
        </div>
    </form>
@endsection('body')