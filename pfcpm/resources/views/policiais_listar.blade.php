@extends('inicial')

@section('body')
    <form action="">
        <h1>Lista Policiais</h1>
        <table id="tbsus" class="table table-bordered table-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">MATRICULA</th>
        <th scope="col">CIDADE</th>
        <th scope="col">ESTADO</th>
        <th scope="col">PELOTÃO</th>
        <th scope="col">RG</th>
        <th scope="col">CPF</th>
        </tr>
    </thead>
    <tbody>
        @foreach($policiais as $sus)
            <tr>
            <td>{{$sus->id}}</td>
            <td>{{$sus->nome}}</td>
            <td>{{$sus->num_mat}}</td>
            <td>{{$sus->cidade}}</td>
            <td>{{$sus->estado}}</td>
            <td>{{$sus->pelotao}}</td>
            <td>{{$sus->rg}}</td>
            <td>{{$sus->cpf}}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </form>
@endsection('body')