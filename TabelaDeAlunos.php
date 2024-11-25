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
    <link rel="stylesheet" href="CSS/tabela.css">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>IDADE</th>
                <th>INSTITUIÇÃO</th>
                <th>CURSO</th>
            </tr>
            <?php foreach ($alunos as $aluno):?>
                <tr>
                    <td><?=$aluno["id"]?></td>
                    <td><?=$aluno["nome"]?></td>
                    <td><?=$aluno["idade"]?></td>
                    <td><?=$aluno["instituicao"]?></td>
                    <td><?=$aluno["curso"]?></td>
                </tr>
            <?php endforeach; ?>
            
        </thead>
    </table>

</body>
</html>