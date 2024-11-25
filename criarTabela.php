<?php

#ARQUIVO PARA CRIAR TABELA PRO BANCO DE DADOS

require "./config.php";

$sql = "CREATE TABLE IF NOT EXISTS alunos (
    id INTEGER PRIMARY KEY,
    nome TEXT NOT NULL, 
    idade INT NOT NULL, 
    instituicao TEXT NOT NULL,
    curso TEXT NOT NULL
)";

$sql = $pdo->prepare($sql);
$sql->execute();

$sql = "CREATE TABLE IF NOT EXISTS notas (
    id INTEGER PRIMARY KEY,
    nome_id INT,
    alunos_id INT,
    prova FLOAT NOT NULL,
    atividade FLOAT NOT NULL,
    ead FLOAT NOT NULL, 
    avaliacaoIntegrada FLOAT NOT NULL,
    FOREIGN KEY (nome_id) REFERENCES alunos(id),
    FOREIGN KEY (alunos_id) REFERENCES alunos(id)
)";
$sql = $pdo->prepare($sql);
$sql->execute();