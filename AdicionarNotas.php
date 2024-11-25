<?php
require "./config.php";

$sql = "SELECT * FROM alunos";
$sql = $pdo->prepare($sql);
$sql->execute();

$alunos = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/criacao.css">
    <title>Notas dos Alunos</title>
</head>
<body>
    
    <form method="get" action="./AdicionarNaTabela.php">
    <h1>Olá, Usuário</h1>
        <select name="nome_id">
            <option value="">Selecione o Aluno</option>
            <?php foreach ($alunos as $aluno): ?>
                <option value="<?=$aluno["id"]?>"><?= $aluno["nome"] ?></option>
            <?php endforeach; ?>
        </select> <br>

        <p>Nota da Prova</p>
        <input type="number" min=0 max=10 name="prova" id="prova" required> <br>

        <p>Nota das Atividades</p>
        <input type="number" min=0 max=10 name="atividade" id="atividade" required> <br>

        <p>Nota do EAD</p>
        <input type="number" min=0 max=10 name="ead" id="ead" required> <br>

        <p>Nota da Avaliação Integrada</p>
        <input type="number" min=0 max=10 name="avaliacaoIntegrada" id="avaliacaoIntegrada" required> <br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
