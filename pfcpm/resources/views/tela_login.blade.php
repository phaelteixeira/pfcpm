<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>Login</title>
</head>
<body>
    <div id="divexterna">
        <img id="img" src="/imgs/PMBA.png" width="100" height="100" alt="">
        <h1>Login</h1>
        <form action="{{route('inicio.create')}}" method="GET"> 
            <div >   
            @csrf   
                <label id= "label" for="matricula">Nº da matrícula</label>
                <input type="text" name="matricula" id="matricula" class="form-control" size=20 >
            </div>
            <div>
                <label id= "label" for="senha">Senha</label>
                <input id="s" type="password" name="senha" id="senha" class="form-control" size=20 > 
            </div>
            <div>
                <button id="btn" type="submit" class="btn btn-primary" >Entrar</button>
            </div>
        </form>
    </div>
</body>
</html>