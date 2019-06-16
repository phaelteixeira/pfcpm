@extends('inicial')

@section('body')
    <h1>Lista de Suspeitos</h1>
        <table id="tbsus" class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">VULGO</th>
        <th scope="col">CPF</th>
        <th scope="col">RG</th>
        <th scope="col">SEXO</th>
        <th scope="col">ESTADO</th>
        <th scope="col">CIDADE</th>
        <th scope="col">LOCAL DE ATUAÇÃO</th>
        <th scope="col">DATA DE NASCIMENTO</th>
        <th scope="col">NOME DO PAI</th>
        <th scope="col">NOME DA MÃE</th>
        <th scope="col">FOTO</th>
        </tr>
    </thead>
    <tbody>
        @foreach($suspeito as $sus)
            <tr>
                <td>{{$sus->id}}</td>
                <td>{{$sus->nome}}</td>
                <td>{{$sus->vulgo}}</td>
                <td>{{$sus->cpf}}</td>
                <td>{{$sus->rg}}</td>
                <td>{{$sus->sexo}}</td>
                <td>{{$sus->estado}}</td>
                <td>{{$sus->cidade}}</td>
                <td>{{$sus->localAtuacao}}</td>
                <td>{{$sus->dataNascimento}}</td>
                <td>{{$sus->nomePai}}</td>
                <td>{{$sus->nomeMae}}</td>
                <td>{{$sus->foto}}</td>
                <td>
                <form action = "{{route('suspeitos.destroy', $sus)}}" method = "POST">
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