@extends('inicial')

@section('body')
    <h1>Lista de Suspeitos</h1>
        <table id="tbsus" class="table table-bordered table-dark">
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
        @foreach($policiais as $sus)
            <tr>
                <td>{{$sus->id}}</td>
                <td>{{$sus->nome}}</td>
                <td>{{$sus->num_mat}}</td>
                <td>{{$sus->cpf}}</td>
                <td>{{$sus->rg}}</td>
                <td>{{$sus->sexo}}</td>
                <td>{{$sus->estado}}</td>
                <td>{{$sus->cidade}}</td>
                <td>{{$sus->pelotao}}</td>
                <td>
                <form action = "{{route('policiais.destroy', $sus)}}" method = "post">
                    @csrf
                    <a class = "btn btn-success" href="{{route('suspeitos.edit', $sus)}}">Editar</a>
                    @method('DELETE')
                    <button type = "submit" class = "btn btn-danger">Excluir</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
@endsection('body')