@extends('inicial')

@section('body')
    <form  action="{{route('dispensa.store')}}" method="POST">
        @csrf
        <div>
            <h1 id="titu">Solicitação de Dispensa</h1>

            <div class="escalado">
                <label for="escalado">Devidamente Escalado No: </label>
                <input type="text" class="form-control" name="escalado" id="escalado" size=30>
            </div>
            <div class="dia">
                <label for="dia">Dia do Serviço</label>
                <input type="date" class="form-control" name="dia" id="dia" size=30>
            </div>
            <div class="hora">
                <label for="hora">Das:</label>
                <input type="time" class="form-control" name="das" id="hora"  size=30> 
            </div>
            <div class="as">
                <label for="hora">Às:</label>
                <input type="time" class="form-control" name="as" id="hora"  size=30> 
            </div>
            <div class="virtude">
                <label for="hora">Em virtude de:</label>
                <textarea type="text" class="form-control" id="virtude" name="virtude" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" id="btndispensa" class="btn btn-primary">Solicitar</button>
    </form>
@endsection('body')