<?php
require_once 'Usuario.php';
require_once 'Professor.php';
require_once 'Aluno.php';

$professor1 = new Professor("AkiraToriama", "Akira.toriama@gmail", "senai");
$professor2 = new Professor("MateusMulekada", "mateus.mulekada@gmail", "Matematica");

$aluno1 = new Aluno("Rafael", "Rafael.Almeida@gmail.com", "12345");
$aluno2 = new Aluno("Joao", "JoaoBaronizoni@gmail.com", "67890");

// Exibindo informações dos professores
echo "<h2>Professores:</h2>";
echo $professor1->exibirInfo() . "<br>";
echo $professor2->exibirInfo() . "<br>";

// Exibindo informações dos alunos
echo "<h2>Alunos:</h2>";
echo $aluno1->exibirInfo() . "<br>";
echo $aluno2->exibirInfo() . "<br>";
