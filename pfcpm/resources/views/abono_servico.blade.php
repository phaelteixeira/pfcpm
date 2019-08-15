@if(Auth::User()->patente == 'Soldado 1ª Classe')
    @extends('inicial_policial');
@endif

@section('body')
<form action="{{route('abono.store')}}" method="POST">
        @csrf
        <h1>Abono de Serviço</h1>
        <div id="div_ab">
            <div class="formulario">
                <div class="nomeabono">
                    <label for="nomeabono">Eu</label>
                    <input class="form-control" name="nome" id="nomeabono">
                </div>
                <div class="matabono">
                    <label for="matabono">Matricula:</label><input class="form-control" name="mat" id="matabono"> 
                </div>
                <div class="textoabono">
                    <label>Solicito a V.S.Âª autorização para abonar o Serviço, no qual estou escalado confome informações abaixo:</label>
                </div>
                <div class="substituto">
                    <label>Substituto:</label><input class="form-control" name="substituto" id="substituto">
                </div>    
                <div class="mat_sub">
                    <label>Matri­cula:</label><input class="form-control" name="mat_sub" id="mat_sub">
                </div>
                <div class="servico">
                    <label for="servico">Serviço:</label>
                    <input class="form-control" name="servico" id="servico">
                </div>
                <div class="funcao">
                    <label>Função:</label><input class="form-control" name="funcao" id="funcao">
                </div>
                <div class="horario">
                    <label for="horario">Horario:</label>
                    <input class="form-control" type="time" name="horario" id="horario">
                </div>
                <div class="horario2">
                    <label for="horario2">Até as:</label>
                    <input class="form-control" type="time" name="horario" id="horario2">
                </div>
                <div class="btnab" >
                    <button type="submit" id="btnab" class="btn btn-primary" >Solicitar</button>
                </div>
            </div>
        </div>
    </form>
@endsection('body')