<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    <button type="submit" onclick = "confirma()">teste</button>
    <div id="popupcx">
        <div id="popupimg" >
            <img src="/imgs/PMBA.png" width="50" height="50" alt="">
        </div>
        <p id="popuptxt">Deseja realmente fazer isso!</p>
        <p>
        <input type="button" id="popupbtnsim" onclick="sim()"  value="SIM" class="btn btn-success" ><input type="button" onclick="nao()"  id="popupbtnnao" value="NÃO" class="btn btn-danger">
        </p>
    </div>
    <script src="js/script.js"></script>
</body>
</html>