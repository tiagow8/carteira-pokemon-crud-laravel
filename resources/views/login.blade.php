<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastro/cadastro.css">
    <title>Login/Cadastro</title>
</head>
<body>
    <div id="containerForm" class="containerForm">
        <div id="avatarsContainer" class="avatarsContainer">
            <img class="imgAvatar" src="../images/4770794.gif">
            <img class="imgAvatar" src="../images/p-leafgreen.gif">
        </div>
        <form id="form" action="login" class="form" method="POST">
            @csrf
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username">
            <button type="submit">Entrar</button>
        </form>
        <a href="./cadastro">Clique aqui para se Cadastrar</a>
    </div>
</body>
</html>