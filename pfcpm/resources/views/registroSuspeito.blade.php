@extends('inicial')

@section('body')
    <div class="registrosuspeito">
        <div class="registrosus">
            <h2 style="text-align: center; margin-top: 10px;">Registro do Suspeito</h2>
            <p style="font-weight: bold;" class="registroSn">NOME:<br><p class="registronome">{{$suspeito->nome}}</p></p>
            <p style="font-weight: bold;" class="registroSf"><br> <img style="width: 100px; height: 100px;" src="../storage/{{$suspeito->foto}}"/></p>
            <p style="font-weight: bold;" class="registroSv">VULGO:<br><p class="registrovulgo">{{$suspeito->vulgo}}</p></p>
            <P style="font-weight: bold;" class="registroSex">SEXO:<br><p class="registroSsexo">{{$suspeito->sexo}}</p></P>
            <P style="font-weight: bold;" class="registroSdata">DATA DE NASCIMENTO:<br><p class="registrodatan">{{date( 'd/m/Y' , strtotime($suspeito->dataNascimento))}}</p></P>
            <P style="font-weight: bold;" class="registroScp">CPF:<br><p class="registroScpf">{{$suspeito->cpf}}</p></P>
            <P style="font-weight: bold;" class="registroSr">RG:<br><p class="registroSrg">{{$suspeito->rg}}</p></P>
            <p style="font-weight: bold;" class="registroSe">ESTADO:<br><p class="registroSestado">{{$suspeito->estado}}</p></p>
            <P style="font-weight: bold;" class="registroSc">CIDADE:<br><p class="registroScidade">{{$suspeito->cidade}}</p></P>
            <P style="font-weight: bold;" class="registroSu">ENDEREÇO:<br><p class="registropais">{{$suspeito->endereco}}</p></P>
            <P style="font-weight: bold;" class="registroSu">NOMDE DO PAI:<br><p class="registropais">{{$suspeito->nomePai}}</p></P>
            <P style="font-weight: bold;" class="registroSu">NOMDE DA MÃE:<br><p class="registropais">{{$suspeito->nomeMae}}</p></P>
            <P style="font-weight: bold;" class="registroSu">CRIME:<br><p class="registropais">{{$suspeito->crime}}</p></P>
            <P style="font-weight: bold;" class="registroSu">LOCAL DE ATUAÇÃO:<br><p class="registropais">{{$suspeito->localAtuacao}}</p></P>
            <P style="font-weight: bold;" class="registroObs">OBSERVAÇÕES RELACIONADAS AO SUSPEITO:<br><p class="registroObss">{{$suspeito->obs}}</p></P>
        </div>

        <form action="{{route('suspeitos.destroy', $suspeito)}}" method="POST">
            @csrf
            <a style= " position:relative; left: 55px; width: 100px; " class = "btn btn-success" href="{{route('suspeitos.edit', $suspeito)}}">Editar</a>
            @method('DELETE')
            <button style=" position: relative; left: 58%; width:100px; margin:20px; " type="submit" class = "btn btn-danger">Excluir</button>
        </form> 
    </div>
@endsection('body')