<?php 
require './config.php';

// Verifica se todos os dados de notas estão presentes
if(!empty($_GET['nome_id']) && !empty($_GET['prova']) && !empty($_GET['atividade']) && !empty($_GET['ead']) && !empty($_GET['avaliacaoIntegrada'])) {

    $nome_id = $_GET['nome_id'];
    $prova = $_GET["prova"];
    $atividade = $_GET["atividade"];
    $ead = $_GET["ead"];
    $avaliacaoIntegrada = $_GET["avaliacaoIntegrada"];

    // Corrigindo a consulta e a ordem dos comandos
    $sql = "INSERT INTO notas (nome_id, prova, atividade, ead, avaliacaoIntegrada) VALUES (:nome_id, :prova, :atividade, :ead, :avaliacaoIntegrada)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome_id', $nome_id);
    $stmt->bindValue(':prova', $prova);
    $stmt->bindValue(':atividade', $atividade);
    $stmt->bindValue(':ead', $ead);
    $stmt->bindValue(':avaliacaoIntegrada', $avaliacaoIntegrada);
    $stmt->execute();
}

// Verifica se todos os dados do aluno estão presentes
if (!empty($_GET['nome']) && !empty($_GET['idade']) && !empty($_GET['instituicao']) && !empty($_GET['curso'])) {

    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $instituicao = $_GET["instituicao"];
    $curso = $_GET["curso"];

    // Corrigindo a ordem dos comandos e execução
    $sql = "INSERT INTO alunos (nome, idade, instituicao, curso) VALUES (:nome, :idade, :instituicao, :curso)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':nome', $nome);
    $stmt->bindValue(':idade', $idade);
    $stmt->bindValue(':instituicao', $instituicao);
    $stmt->bindValue(':curso', $curso);
    $stmt->execute();
}

header('Location: index.php');
