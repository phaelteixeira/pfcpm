@extends('inicial')

@section('body')
    <form>
        <div>
            <h1 id="titu">Solicitação de Dispensa</h1>

            
            <div class="local">
                <label for="local">Local</label>
                <input class="form-control" name="local" id="local" size=30>
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
                <textarea class="form-control" id="virtude" name="virtude" rows="3"></textarea>
            </div>
            <div class="data">
                <label for="data">Data da Solicitação</label>
                <input type="date" class="form-control" name="daa" id="data" size=30>
            </div>
            
        </div>
    </form>
@endsection('body')