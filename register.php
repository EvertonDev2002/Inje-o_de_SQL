<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='./css/main.css'>
</head>
<body>
    <form class="container small" method="POST" action="./cadastrar.php" enctype="multipart/form-data">
        <h2>CADASTRAR</h2>

        <input type="text" placeholder="Usuário" name="user">
        <input type="text" placeholder="CPF" name="cpf">
        <input type="text" placeholder="Senha" name="pass"> 
        
        <button type="submit">Cadastrar</button>
        <a href="./index.php">Ou entre</a>
    </form>
</body>
</html>