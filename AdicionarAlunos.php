<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/criacao.css">
    <title>Inscrição de Alunos</title>
</head>
<body>
    
    <form method="get" action="AdicionarNaTabela.php">
        <h1>INSCRIÇÃO DE ALUNOS</h1>
        <p>Digite seu nome</p>
        <input type="text" name="nome" id="nome" required> <br>
        <p>Digite sua idade</p>
        <input type="number" name="idade" id="idade" required> <br>
        <p>Digite sua instituição</p>
        <input type="text" name="instituicao" id="instituicao" required> <br>
        <p>Digite seu curso</p>
        <input type="text" name="curso" id="curso" required> <br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>