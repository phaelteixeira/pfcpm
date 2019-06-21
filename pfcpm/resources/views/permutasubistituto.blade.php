@extends('inicial')

@section('body')
    <form  action="{{route('permutas.update', $permuta)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <div>
            <h1 id="titu">Aceitar de permuta</h1>
            <h2>Dados do Solicitante</h2>
            
                <div class="escalado">
                    <label for="escalado">Eu:</label>
                    <input readonly type="text" id="imp" class="form-control" name="nome" id="nome" value="{{$permuta->nome}}">
                </div>
                <div class="escalado">
                    <label for="escalado">Matricula: </label>
                    <input readonly id="imp" type="text" class="form-control" name="matricula" id="matricula" value="{{$permuta->matricula}}" >
                </div>

                <div class="escalado">
                    <label for="escalado">Local: </label>
                    <input readonly id="imp" type="text" class="form-control" name="local" id="local" value="{{$permuta->local}}">
                </div>

                <div class="dia">
                    <label for="dia">no dia</label>
                    <input readonly type="date" class="form-control" name="dia" id="dia" value="{{$permuta->dia_do_servico}}">
                </div>
                <div class="hora">
                    <label for="hora">Das:</label>
                    <input readonly type="time" class="form-control" name="das" id="hora" value="{{$permuta->hora_inicial}}" > 
                </div>
                <div class="ass">
                    <label for="hora">Às:</label>
                    <input readonly type="time" class="form-control" name="as" id="hora" value="{{$permuta->hora_final}}" > 
                </div>
                <div class="virtude">
                    <label for="virtude">Tendo em vista:</label><br>
                    <textarea readonly name="virtude" id="virtude" >{{$permuta->virtude}}</textarea>
                </div>
            <div class="solicitante">
                <div class="escalado">
                    <label for="escalado">Eu: </label>
                    <input id="imp" type="text" class="form-control" name="nomesub" id="nome" size=30>
                </div>

                <div class="escalado">
                    <label for="escalado">Matricula: </label>
                    <input id="imp" type="text" class="form-control" name="matriculasub" id="matricula" size=30>
                </div>

                <div class="escalado">
                    <label for="escalado">Local: </label>
                    <input id="imp" type="text" class="form-control" name="localsub" id="local" size=30>
                </div>

                <div class="dia">
                    <label for="dia">no dia</label>
                    <input type="date" class="form-control" name="diasub" id="dia" size=30>
                </div>
                <div class="hora">
                    <label for="hora">Das:</label>
                    <input type="time" class="form-control" name="dassub" id="hora"  size=30> 
                </div>
                <div class="ass">
                    <label for="hora">Às:</label>
                    <input type="time" class="form-control" name="assub" id="hora"  size=30> 
                </div>
                <button  id="btndispensa" class="btn btn-primary">OK</button>
            </div>
        </div>
        
    </form>
@endsection('body')