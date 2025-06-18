<?php
include_once 'Aluno.class.php';

$fulano = new Aluno("Fulano da Silva", 5, 7);

$nome = $fulano->getNome();
$nota1 = $fulano->getNota1();
$nota2 = $fulano->getNota2();

echo "Aluno: $nome<br>";
echo "Nota 1: $nota1<br>";
echo "Nota 2: $nota2<br>";
?>
