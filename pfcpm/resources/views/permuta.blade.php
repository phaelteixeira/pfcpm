@extends('inicial')

@section('body')
    <form>
        <h1 id="titu"> Solicitação de Permuta</h1>
        <div id="permuta">
            
            
            @foreach($policia as $policial)
            <div id="spo">
                <p>AUTORIZO</P>
                <P> EM___/___/___</P>
                _____________________</P>
                <P>  Chefe da SPO</P>
            </div>
            <div id="cmd">
                <p>COMANDANTE DO PELOTÃO</p>
                <p> OPINO POR: DEFERIMENTO (  )</p>
                <p>  INDEFERIMENTO (  )</p>
                <p> _____________________</p>
                <p>  CMD PEL</p>
            </div>
            <p id="via">VIA DA SPO</p>
            <p >POLÍCIA MILITAR DA BAHIA</p>
            <p>COMANDO DE POLICIAMENTO REGIONAL LESTE </p>
            <p>65ª CIPM - FEIRA DE SANTANA</p>
            <h2>PERMUTA</h2>
            <p>Eu, {{$policial->nome}}, Mat.:{{$policial->num_mat}} solicito a V.Sª permulta do serviço </p>
            <p>para o qual estou devidamente escalado no ____________________ no dia ___/___/___ das _____às_____</p>
            <p>como o,_________________________, Mat.:_______________ que se encontra escalado no ___________</p>
            <p>no dia ____/____/____, das______às_________, tendo em vista___________________________________</p>
            <p>_______________________________________________________________________________________________</p>
            <p>Declaro que a referida permuta está em conformidade com o preceituado no Art. 2º § 2º, Portaria N° 067 - CG/11.</p>
            <p>Feira de Santana. ____/____/_____</p>
            <p>_________________________</p>                    <p>_____________________</p>
            <p>Solicitante</p>                                  <p>Substituto</p>
        
            @endforeach
        </div>
    </form>
@endsection('body')