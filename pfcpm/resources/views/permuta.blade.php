@extends('inicial')

@section('body')
    <form>
        <h1 id="titu"> Solicitação de Permuta</h1>
        <div id="permuta">
            @foreach($policia as $policial)
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
                <p style="position: relative; right:80px">Eu, {{$policial->nome}}, Mat.:{{$policial->num_mat}} solicito a V.Sª permulta do serviço </p>
                <p>para o qual estou devidamente escalado no ____________________ no dia ___/___/___ das _____às_____</p>
                <p style="position: relative; right:9px">como o,_________________________, Mat.:_______________ que se encontra escalado no ___________</p>
                <p style="position: relative; right:9px">no dia ____/____/____, das______às_________, tendo em vista___________________________________</p>
                <p style="position: relative; right:9px">__________________________________________________________________________________________</p>
                <p><b>Declaro que a referida permuta está em conformidade com o preceituado no Art. 2º § 2º, Portaria N° 067 - CG/11.</b></p>
                <p>Feira de Santana, ____/____/_____</p>
                <p style="position: relative; right:200px">__________________________________<br>Solicitante <p style="position: relative; left:200px; top:-62px">__________________________________<br>Substituto</p></p>                    
            </div>
            @endforeach
        </div>
    </form>
@endsection('body')