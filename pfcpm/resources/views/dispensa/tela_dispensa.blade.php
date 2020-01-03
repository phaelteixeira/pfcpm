@extends('inicial')

@section('body')
    <div class="text-center pt-5">
            Eu, {{$dispensa->Solicitante}}, MAT: {{$dispensa->Matricula}}, 
        <p>solicito a V.S.ª autorização para abonar o serviço, no qual estou escalado no dia, {{$dispensa->dia_do_servico}}</p>
        <p>dàs {{$dispensa->hora_inicial}} às {{$dispensa->hora_final}}</p>
    </div>
@endsection('body')