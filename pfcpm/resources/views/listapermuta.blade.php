@extends('inicial')

@section('body')
    <div id="tabela2" >
        <ul class="list-group">
            <li id="litable" class="list-group-item active">Lista de Permutas</li>
            @foreach($permutas as $permuta)
                <a href="{{route('permuta.show', $permuta)}}"><li id="tabela2" class="list-group-item">{{$permuta->nome}}</li></a>
            @endforeach
        </ul>
    </div>      
@endsection('body')