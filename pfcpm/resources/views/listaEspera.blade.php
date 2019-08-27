@extends('inicial')

@section('body')
    <div id="tabela2" >
        <ul class="list-group">
        <li id="tabsus" id="litable" class="list-group-item active"><h4 class="h4nome">Solicitante</h4><h4 class="h4vulgo">Status</h4></h4></li>
            @foreach($permutas as $per)
                <a href="{{route('permutas.show', $per)}}"><li id="tabela2" class="list-group-item"><h4 class="h4nome">{{$per->nome}}</h4><h4 class="h4vulgo">{{$per->status}}</h4>
                <h4 style="left:83%" class="h4qtd"><form action="{{route('permutas.destroy', $per)}}" method="POST"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger" >Cancelar Solicitação</button></form></h4></li></a>
            @endforeach
        </ul>
    </div>      
@endsection('body')