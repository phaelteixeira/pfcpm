@extends('inicial')

@section('body')
    <div id="tabela2" >
        <ul class="list-group">
            <li id="litable" class="list-group-item active">Lista de Suspeitos</li>
            @foreach($suspeito as $sus)
                <a href="{{route('suspeitos.show', $sus)}}"><li id="tabela2" class="list-group-item">{{$sus->nome}}</li></a>
            @endforeach
        </ul>
    </div>      
@endsection('body')