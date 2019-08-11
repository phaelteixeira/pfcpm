@extends('inicial')

@section('body')
    <form  action="{{route('permutas.store')}}" method="POST">
        @csrf
        <div>
            <h1 id="titu">Solicitação de Permuta</h1>

            <div class="escalado">
                <label for="escalado">Eu: </label>
                <input id="imp" type="text" class="form-control" value="{{ Auth::User()->nome }}" name="nome" id="nome" size=30>
            </div>

            <div class="escalado">
                <label for="escalado">Matricula: </label>
                <input id="imp" type="text" class="form-control" value=" {{ Auth::User()->matricula }} " name="matricula" id="matricula" size=30>
            </div>

            <div class="escalado">
                <label for="escalado">Local: </label>
                <input id="imp" type="text" class="form-control" name="local" id="local" size=30>
            </div>

            <div class="dia">
                <label for="dia">no dia</label>
                <input type="date" class="form-control" name="dia" id="dia" size=30>
            </div>
            <div class="hora">
                <label for="hora">Das:</label>
                <input type="time" class="form-control" name="das" id="hora"  size=30> 
            </div>
            <div class="ass">
                <label for="hora">Às:</label>
                <input type="time" class="form-control" name="as" id="hora"  size=30> 
            </div>
            <div class="virtude">
                <label for="virtude">Tendo em vista:</label><br>
                <textarea name="virtude" id="virtude" ></textarea>
            </div>
            <div class="btnpermuta">
                <button type="submit" id="btnpermuta" class="btn btn-primary">OK</button>
            </div>
    </form>
@endsection('body')