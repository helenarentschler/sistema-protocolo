<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../index.css">
    <title>Atendimento</title>
</head>
<body>
    <h1>Situaçao do Atendimento</h1>
    <ul>
        <li>Codigo: <?php echo $_GET['codigo']?></li>
        <li>Solicitante: <?php echo $_GET['solicitante']?></li> 
        <li>Email: <?php echo $_GET['email']?></li>
        <li>Solicitacao: <?php echo $_GET['desc']?></li>
        <li>Status: <?php echo $_GET['status']?></li>
        <li>Ano: <?php echo $_GET['ano']?></li>
        <li>Data: <?php echo $_GET['data']?></li>
    </ul>
    <a href="../../index.php">Voltar</a>
</body>
</html>