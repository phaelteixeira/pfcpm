@if(Auth::User()->patente == 'Soldado 1ª Classe')
    @extends('inicial_policial');
@endif
@if(Auth::User()->patente != 'Soldado 1ª Classe')
    @extends('inicial');
@endif

@section('body')
    <form action="{{route('permuta.index')}}" >
        <h1 id="titu"> Solicitação de Permuta</h1>
        <div id="permuta">
            @foreach($permutas as $permuta)
            <div id="spo">
            <p id="via">VIA DA SPO</p>
                <p id="spo">AUTORIZO EM___/___/___ _____________________  Chefe da SPO</P>
                <div id="cmd">
                <p>COMANDANTE DO PELOTÃO <br> OPINO POR: DEFERIMENTO (          ) INDEFERIMENTO (  ) _____________________<br>CMD PEL</p>
            </div>
            </div>
            <p style="position: relative; text-align:center; top:80px">POLÍCIA MILITAR DA BAHIA <br> COMANDO DE POLICIAMENTO REGIONAL LESTE <br> 65ª CIPM - FEIRA DE SANTANA</p>
            <div style="position: relative; top:100px">
                <h1 id="tpermuta"><b>PERMUTA</b></h1>
                <p style="position: relative; right:80px">Eu, {{$permuta->nome}}, Mat.:{{$permuta->matricula}} solicito a V.Sª permulta do serviço </p>
                <p style="position: relative; right:-7px">para o qual estou devidamente escalado no {{$permuta->local}} no dia {{$permuta->dia_do_servico}} das {{$permuta->hora_inicial}} às {{$permuta->hora_final}}</p>
                <p style="position: relative; right:9px">como o,_________________________, Mat.:_______________ que se encontra escalado no ___________</p>
                <p style="position: relative; right:9px">no dia ____/____/____, das______às_________, tendo em vista___________________________________</p>
                <p style="position: relative; right:9px">__________________________________________________________________________________________</p>
                <p><b>Declaro que a referida permuta está em conformidade com o preceituado no Art. 2º § 2º, Portaria N° 067 - CG/11.</b></p>
                <p>Feira de Santana, ____/____/_____</p>
                <p style="position: relative; right:200px">__________________________________<br>Solicitante <p style="position: relative; left:200px; top:-62px">__________________________________<br>Substituto</p></p>                    
            </div>
            @endforeach
            <button classs="btn btn-primary">Solicitar Permuta</button>
        </div>
    </form>
@endsection('body')