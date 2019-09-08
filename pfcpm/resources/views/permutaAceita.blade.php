@extends('inicial')

@section('body')
    <h1 id="titu"> Solicitação de Permuta</h1>
    <div id="spo">
        <p id="via">VIA DA SPO</p>
            <p id="spo">AUTORIZO EM___/___/___ _____________________  Chefe da SPO</P>
            <div style="display: none"><input type="text"  id="idPermuta" value="{{$permuta->id}}" ></div>
            @if(Auth::user()->setor == 'SPO' && Auth::user()->chefedeSetor == 'Sim')
                <div class="butaoSPO">
                <form action="{{route('spo', $permuta->id)}}" >
                    <a class="btn btn-primary" id="btnspoSim" onclick="confirma()" >OK</a>
                    <div id="popupcx">
                        <div id="popupimg" >
                            <img src="/imgs/PMBA.png" width="50" height="50" alt="">
                        </div>
                        <p id="popuptxt">Deseja realmente prosseguir com a ação ?</p>
                        <p>
                        <input type="submit" id="popupbtnsim" value="Sim"  class="btn btn-success" ><input type="button" onclick="nao()"  id="popupbtnnao" value="NÃO" class="btn btn-danger">
                        </p>
                    </div>
                </form>

                <form action="{{route('spo', $permuta->id)}}" >
                    <a class="btn btn-primary" id="btnspoNao" onclick="confirma()" >Não</a>   
                    <div id="popupcx">
                        <div id="popupimg" >
                            <img src="/imgs/PMBA.png" width="50" height="50" alt="">
                        </div>
                        <p id="popuptxt">Deseja realmente prosseguir com a ação ?</p>
                        <p>
                        <input type="submit" id="popupbtnsim" value="Sim"  class="btn btn-success" ><input type="button" onclick="nao()"  id="popupbtnnao" value="NÃO" class="btn btn-danger">
                        </p>
                    </div>
                </form>

                <form action="{{route('spo', $permuta->id)}}" >
                    <a class="btn btn-primary" id="btnspoRefazer" onclick="confirma()">Refazer Permuta</a>
                    <div id="popupcx">
                        <div id="popupimg" >
                            <img src="/imgs/PMBA.png" width="50" height="50" alt="">
                        </div>
                        <p id="popuptxt">Deseja realmente prosseguir com a ação ?</p>
                        <p>
                        <input type="submit" id="popupbtnsim" value="Sim"  class="btn btn-success" ><input type="button" onclick="nao()"  id="popupbtnnao" value="NÃO" class="btn btn-danger">
                        </p>
                    </div>
                </form>
            @endif
        </div>
    </div>
    <div class="cmd">
        <p>COMANDANTE DO PELOTÃO <br> OPINO POR: DEFERIMENTO (          ) INDEFERIMENTO (  ) _____________________<br>CMD PEL</p>
        @if(Auth::user()->setor == 'PELOTÃO' && Auth::user()->chefedeSetor == 'Sim')
                <form action="{{route('cmd', $permuta->id)}}">
                    <a type="button" class="btn btn-primary" id="btncmdSim" onclick="confirma()" >OK</a>
                    <div id="popupcx">
                        <div id="popupimg" >
                            <img src="/imgs/PMBA.png" width="50" height="50" alt="">
                        </div>
                        <p id="popuptxt">Deseja realmente prosseguir com a ação ?</p>
                        <p>
                        <input type="submit" id="popupbtnsim" value="Sim"  class="btn btn-success" ><input type="button" onclick="nao()"  id="popupbtnnao" value="NÃO" class="btn btn-danger">
                        </p>
                    </div>
                </form>

                <form action="{{route('cmd', $permuta->id)}}">
                <a class="btn btn-primary" id="btncmdNao" onclick="confirma()" >Não</a>
                    <div id="popupcx">
                        <div id="popupimg" >
                            <img src="/imgs/PMBA.png" width="50" height="50" alt="">
                        </div>
                        <p id="popuptxt">Deseja realmente prosseguir com a ação ?</p>
                        <p>
                        <input type="submit" id="popupbtnsim" value="Sim"  class="btn btn-success" ><input type="button" onclick="nao()"  id="popupbtnnao" value="NÃO" class="btn btn-danger">
                        </p>
                    </div>
                </form>

            <form action="{{route('cmd', $permuta->id)}}">
                <a class="btn btn-primary" id="btncmdRefazer" onclick="confirma()" >Refazer Permuta</a>
                <div id="popupcx">
                    <div id="popupimg" >
                        <img src="/imgs/PMBA.png" width="50" height="50" alt="">
                    </div>
                    <p id="popuptxt">Deseja realmente prosseguir com a ação ?</p>
                    <p>
                    <input type="submit" id="popupbtnsim" value="Sim"  class="btn btn-success" ><input type="button" onclick="nao()"  id="popupbtnnao" value="NÃO" class="btn btn-danger">
                    </p>
                </div>
            </form>
        @endif
    </div>
    <div class="divpermuta">
        <p style="position: relative; text-align:center; ">POLÍCIA MILITAR DA BAHIA <br> COMANDO DE POLICIAMENTO REGIONAL LESTE <br> 65ª CIPM - FEIRA DE SANTANA</p>
        <div class="corpoPermuta">
            <h1 id="tpermuta"><b>PERMUTA</b></h1>
            <p style="position: relative; right:-30px">Eu, {{$permuta->nome}}, Mat.:{{$permuta->matricula}} solicito a V.Sª permulta do serviço </p>
            <p style="position: relative; right:-7px">para o qual estou devidamente escalado no {{$permuta->local}} no dia {{ date('d/m/Y', strtotime($permuta->dia_do_servico))}} das {{$permuta->hora_inicial}} às {{$permuta->hora_final}}</p>
            <p style="position: relative; right:9px">como o, {{$permuta->escalado}}, Mat. {{$permuta->escaladoMatricula}} que se encontra escalado no {{$permuta->local}}</p>
            <p style="position: relative; right:9px">no dia {{ date('d/m/Y', strtotime($permuta->escaladoDia_do_servico))}}, das {{$permuta->escaladoHora_inicial}} às {{$permuta->escaladoHora_final}} , tendo em vista</p><p> {{$permuta->virtude}}</p>
            <p><b>Declaro que a referida permuta está em conformidade com o preceituado no Art. 2º § 2º, Portaria N° 067 - CG/11.</b></p>
            <p>Feira de Santana, ____/____/_____</p>
            <p style="position: relative; right:200px">__________________________________<br>Solicitante <p style="position: relative; left:200px; top:-62px">__________________________________<br>Substituto</p></p>                    
        </div>
    </div>           
    @if($permuta->matricula == Auth::User()->matricula && $permuta->status == 'Aceita')
        <a style="position: relative; top: -50px; left:50%" class="btn btn-success" onclick="confirmarPermuta()" href="{{route('atualizarStatus', $permuta->id)}}">OK</a>
    @endif    
        
@endsection('body')