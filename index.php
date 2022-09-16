<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Atendimento</title>
</head>
<body>
    <h1>Atendimento</h1>
    <form action="App/Core.php" method="post">
        <div>
            <label for="nome">Solicitante</label>
            <input type="text" name="nome" id="nome"><br>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email"><br>
        </div>
        <div>
            <label for="desc">Solicitação</label>
            <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button name="enviar" type="submit">Enviar</button>
        </div>
    </form>
    <a href="App/View/verificar.html">Verificar atendimento solicitado</a>
</body>
</html>



