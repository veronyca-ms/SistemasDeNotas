<?php
require "./config.php";

// Consulta com JOIN para obter o nome do aluno
$sql = "SELECT 
        notas.*,
        alunos.nome AS aluno_nome 
    FROM notas
    INNER JOIN alunos ON notas.nome_id = alunos.id";
$sql = $pdo->prepare($sql);
$sql->execute();

$notas = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/tabela.css">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Nome do Aluno</th>
                <th>Nota da Prova</th>
                <th>Nota da Atividade</th>
                <th>Nota do EAD</th>
                <th>Nota da Avaliação Integrada</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notas as $nota): ?>
                <tr>
                    <td><?=$nota["aluno_nome"]?></td>
                    <td><?=$nota["prova"]?></td>
                    <td><?=$nota["atividade"]?></td>
                    <td><?=$nota["ead"]?></td>
                    <td><?=$nota["avaliacaoIntegrada"]?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
