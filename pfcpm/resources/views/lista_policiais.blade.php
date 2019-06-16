@extends('inicial')

@section('body')
    <h1>Lista de polpeitos</h1>
        <table id="tbpol" class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">MATRÍCULA</th>
        <th scope="col">CPF</th>
        <th scope="col">RG</th>
        <th scope="col">SEXO</th>
        <th scope="col">ESTADO</th>
        <th scope="col">CIDADE</th>
        <th scope="col">PELOTÃO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($policiais as $pol)
            <tr>
                <td>{{$pol->id}}</td>
                <td>{{$pol->nome}}</td>
                <td>{{$pol->num_mat}}</td>
                <td>{{$pol->cpf}}</td>
                <td>{{$pol->rg}}</td>
                <td>{{$pol->sexo}}</td>
                <td>{{$pol->estado}}</td>
                <td>{{$pol->cidade}}</td>
                <td>{{$pol->pelotao}}</td>
                <td>
                <form action="{{route('policiais.destroy', $pol)}}" method = "POST">
                    @csrf
                    <a class = "btn btn-success" href="{{route('policiais.edit', $pol)}}">Editar</a>
                    @method('DELETE')
                    <button type = "submit" class = "btn btn-danger">Excluir</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection('body')